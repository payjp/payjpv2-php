"""OpenAPI spec converter for PHP SDK generation.

Reads ../openapi.json (relative to CWD) and writes openapi-converted.json to CWD.
Replaces additionalProperties containing anyOf with True (boolean)
so that openapi-generator for PHP handles them correctly.
"""

import json
import sys


def replace_additional_properties_anyof(spec: dict) -> dict:
    """Walk components.schemas and replace additionalProperties anyOf with True.

    NOTE: This function only processes top-level properties of each schema.
    Nested object properties are not traversed.
    """
    components = spec.get("components", {})
    schemas = components.get("schemas", {})

    for schema in schemas.values():
        properties = schema.get("properties", {})
        for prop in properties.values():
            additional = prop.get("additionalProperties")
            if isinstance(additional, dict) and "anyOf" in additional:
                prop["additionalProperties"] = True

    return spec


def main() -> None:
    input_path = "../openapi.json"
    output_path = "openapi-converted.json"

    try:
        with open(input_path, "r", encoding="utf-8") as f:
            spec = json.load(f)
    except FileNotFoundError:
        print(f"Error: {input_path} not found.", file=sys.stderr)
        sys.exit(1)
    except json.JSONDecodeError as e:
        print(f"Error: Failed to parse {input_path}: {e}", file=sys.stderr)
        sys.exit(1)

    spec = replace_additional_properties_anyof(spec)

    with open(output_path, "w", encoding="utf-8") as f:
        json.dump(spec, f, indent=2, ensure_ascii=False)
        f.write("\n")

    print(f"Successfully converted OpenAPI spec -> {output_path}")


if __name__ == "__main__":
    main()
