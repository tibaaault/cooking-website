<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SymfonycastsTailwindConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $inputCss;
    private $binary;
    private $_usedProperties = [];

    /**
     * Path to CSS file to process through Tailwind
     * @default '%kernel.project_dir%/assets/styles/app.css'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function inputCss($value): static
    {
        $this->_usedProperties['inputCss'] = true;
        $this->inputCss = $value;

        return $this;
    }

    /**
     * The tailwind binary to use instead of downloading a new one
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function binary($value): static
    {
        $this->_usedProperties['binary'] = true;
        $this->binary = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'symfonycasts_tailwind';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('input_css', $value)) {
            $this->_usedProperties['inputCss'] = true;
            $this->inputCss = $value['input_css'];
            unset($value['input_css']);
        }

        if (array_key_exists('binary', $value)) {
            $this->_usedProperties['binary'] = true;
            $this->binary = $value['binary'];
            unset($value['binary']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['inputCss'])) {
            $output['input_css'] = $this->inputCss;
        }
        if (isset($this->_usedProperties['binary'])) {
            $output['binary'] = $this->binary;
        }

        return $output;
    }

}
