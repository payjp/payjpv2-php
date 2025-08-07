<?php

namespace PAYJP2\Test\Integration;

use PHPUnit\Framework\TestCase;
use PAYJP2\Configuration;
use PAYJP2\Api\CustomersApi;
use GuzzleHttp\Client;

/**
 * Integration test for API configuration and client initialization
 */
class ConfigurationIntegrationTest extends TestCase
{
    /**
     * Test basic configuration setup
     */
    public function testBasicConfigurationSetup()
    {
        $config = new Configuration();
        
        // Test setting API key
        $apiKey = 'Bearer sk_test_12345';
        $config->setApiKey('Authorization', $apiKey);
        
        $this->assertEquals($apiKey, $config->getApiKey('Authorization'));
    }

    /**
     * Test configuration with host setting
     */
    public function testConfigurationWithHost()
    {
        $config = new Configuration();
        $config->setHost('https://api.pay.jp');
        
        $this->assertEquals('https://api.pay.jp', $config->getHost());
    }

    /**
     * Test API client initialization with configuration
     */
    public function testApiClientInitialization()
    {
        $config = new Configuration();
        $config->setApiKey('Authorization', 'Bearer sk_test_12345')
               ->setHost('https://api.pay.jp');
        
        // Test that API client can be instantiated with configuration
        $httpClient = new Client();
        $apiInstance = new CustomersApi($httpClient, $config);
        
        $this->assertInstanceOf(CustomersApi::class, $apiInstance);
    }

    /**
     * Test configuration method chaining
     */
    public function testConfigurationChaining()
    {
        $config = Configuration::getDefaultConfiguration()
            ->setApiKey('Authorization', 'Bearer sk_test_12345')
            ->setHost('https://api.pay.jp')
            ->setDebug(true)
            ->setUserAgent('PAY.JP-PHP-SDK/1.0.0');
        
        $this->assertEquals('Bearer sk_test_12345', $config->getApiKey('Authorization'));
        $this->assertEquals('https://api.pay.jp', $config->getHost());
        $this->assertTrue($config->getDebug());
        $this->assertEquals('PAY.JP-PHP-SDK/1.0.0', $config->getUserAgent());
    }

    /**
     * Test API key with prefix functionality
     */
    public function testApiKeyWithPrefix()
    {
        $config = new Configuration();
        $config->setApiKey('Authorization', 'sk_test_12345')
               ->setApiKeyPrefix('Authorization', 'Bearer');
        
        $this->assertEquals('Bearer sk_test_12345', $config->getApiKeyWithPrefix('Authorization'));
    }

    /**
     * Test that configuration works with different environments
     */
    public function testEnvironmentConfiguration()
    {
        // Test development environment
        $devConfig = new Configuration();
        $devConfig->setApiKey('Authorization', 'Bearer sk_test_12345')
                  ->setHost('https://api.pay.jp')
                  ->setDebug(true);
        
        $this->assertTrue($devConfig->getDebug());
        $this->assertEquals('https://api.pay.jp', $devConfig->getHost());
        
        // Test production environment
        $prodConfig = new Configuration();
        $prodConfig->setApiKey('Authorization', 'Bearer sk_live_67890')
                   ->setHost('https://api.pay.jp')
                   ->setDebug(false);
        
        $this->assertFalse($prodConfig->getDebug());
        $this->assertEquals('https://api.pay.jp', $prodConfig->getHost());
    }
}