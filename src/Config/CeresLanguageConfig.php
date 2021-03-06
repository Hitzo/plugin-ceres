<?php

namespace Ceres\Config;

use IO\Helper\PluginConfig;
use Plenty\Plugin\ConfigRepository;

class CeresLanguageConfig extends PluginConfig
{
    public function __construct(ConfigRepository $configRepository)
    {
        parent::__construct($configRepository, "Ceres");
    }

    public function getActiveLanguages()
    {
        return $this->getMultiSelectValue(
            "language.active_languages",
            [
                "de",
                "en",
                "bg",
                "fr",
                "it",
                "es",
                "tr",
                "nl",
                "pl",
                "pt",
                "nn",
                "ro",
                "da",
                "se",
                "cz",
                "ru",
                "sk",
                "cn",
                "vn"
            ],
            [
                "de"
            ]
        );
    }
}