"""Tests for convert_spec.replace_additional_properties_anyof."""

import copy
import unittest

from convert_spec import replace_additional_properties_anyof


class TestReplaceAdditionalPropertiesAnyof(unittest.TestCase):
    """Test cases for the additionalProperties anyOf replacement logic."""

    def test_anyof_additional_properties_replaced_with_true(self):
        """anyOf 付き additionalProperties が True に置き換わること。"""
        spec = {
            "components": {
                "schemas": {
                    "Metadata": {
                        "properties": {
                            "extra": {
                                "type": "object",
                                "additionalProperties": {
                                    "anyOf": [
                                        {"type": "string"},
                                        {"type": "null"},
                                    ]
                                },
                            }
                        }
                    }
                }
            }
        }

        result = replace_additional_properties_anyof(spec)

        self.assertIs(
            result["components"]["schemas"]["Metadata"]["properties"]["extra"][
                "additionalProperties"
            ],
            True,
        )

    def test_dict_additional_properties_without_anyof_unchanged(self):
        """anyOf を含まない dict 型の additionalProperties は変更されないこと。"""
        spec = {
            "components": {
                "schemas": {
                    "Metadata": {
                        "properties": {
                            "extra": {
                                "type": "object",
                                "additionalProperties": {"type": "string"},
                            }
                        }
                    }
                }
            }
        }

        original = copy.deepcopy(spec)
        result = replace_additional_properties_anyof(spec)

        self.assertEqual(
            result["components"]["schemas"]["Metadata"]["properties"]["extra"][
                "additionalProperties"
            ],
            original["components"]["schemas"]["Metadata"]["properties"]["extra"][
                "additionalProperties"
            ],
        )

    def test_property_without_additional_properties_unchanged(self):
        """additionalProperties がないプロパティは変更されないこと。"""
        spec = {
            "components": {
                "schemas": {
                    "User": {
                        "properties": {
                            "name": {"type": "string"},
                        }
                    }
                }
            }
        }

        original = copy.deepcopy(spec)
        result = replace_additional_properties_anyof(spec)

        self.assertEqual(
            result["components"]["schemas"]["User"]["properties"]["name"],
            original["components"]["schemas"]["User"]["properties"]["name"],
        )

    def test_other_attributes_preserved(self):
        """type, title 等の他属性が保持されること。"""
        spec = {
            "components": {
                "schemas": {
                    "Metadata": {
                        "type": "object",
                        "title": "Metadata",
                        "properties": {
                            "extra": {
                                "type": "object",
                                "title": "Extra",
                                "description": "Additional data",
                                "additionalProperties": {
                                    "anyOf": [
                                        {"type": "string"},
                                    ]
                                },
                            }
                        },
                    }
                }
            }
        }

        result = replace_additional_properties_anyof(spec)
        prop = result["components"]["schemas"]["Metadata"]["properties"]["extra"]

        self.assertEqual(prop["type"], "object")
        self.assertEqual(prop["title"], "Extra")
        self.assertEqual(prop["description"], "Additional data")
        self.assertIs(prop["additionalProperties"], True)

        schema = result["components"]["schemas"]["Metadata"]
        self.assertEqual(schema["type"], "object")
        self.assertEqual(schema["title"], "Metadata")

    def test_idempotent_when_already_true(self):
        """冪等性: additionalProperties が既に True の場合は変更されないこと。"""
        spec = {
            "components": {
                "schemas": {
                    "Metadata": {
                        "properties": {
                            "extra": {
                                "type": "object",
                                "additionalProperties": True,
                            }
                        }
                    }
                }
            }
        }

        result = replace_additional_properties_anyof(spec)

        self.assertIs(
            result["components"]["schemas"]["Metadata"]["properties"]["extra"][
                "additionalProperties"
            ],
            True,
        )

    def test_idempotent_when_false(self):
        """冪等性: additionalProperties が False の場合は変更されないこと。"""
        spec = {
            "components": {
                "schemas": {
                    "Metadata": {
                        "properties": {
                            "extra": {
                                "type": "object",
                                "additionalProperties": False,
                            }
                        }
                    }
                }
            }
        }

        result = replace_additional_properties_anyof(spec)

        self.assertIs(
            result["components"]["schemas"]["Metadata"]["properties"]["extra"][
                "additionalProperties"
            ],
            False,
        )

    def test_empty_spec_without_components(self):
        """空の schema (components なし) でエラーにならないこと。"""
        spec = {"openapi": "3.1.0", "info": {"title": "Test", "version": "1.0"}}

        result = replace_additional_properties_anyof(spec)

        self.assertEqual(result, spec)


if __name__ == "__main__":
    unittest.main()
