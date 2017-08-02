<?php

namespace Krushnaghodke\TranslationBundle\Services;

use Yandex\Translate\Translator;
use Yandex\Translate\Translation;

class TranslateManager
{
    /** @var  string */
    private $apiKey;

    /** @var Translator  */
    private $translator;

    /**
     * TranslateManager constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
        $this->translator = new Translator($this->apiKey);
    }

    /**
     * @param string $sourceString
     * @param string $translateDirection
     * @param bool   $html
     * @param int    $options
     *
     * @return Translation
     */
    public function translate($sourceString, $translateDirection, $html = false, $options = 0)
    {
        try {
            $translation = $this->translator->translate($sourceString, $translateDirection, $html, $options);

            return $translation;
        } catch (\Exception $e) {
            return $e;
        }
    }
}
