# TranslationBundle ![](https://d15hperv2jcnaj.cloudfront.net/assets/v17c227c2f3/bundles/insight/img/medals/with-ribbon/medal-platinum.png)

"A package designed for string translation utilizing the Yandex API. Presently, it exclusively accommodates Yandex translation services. Integration with the Google Translation API is slated for future implementation."

## Installation

To use this bundle in your Symfony2 project add the following to your `composer.json`:

    {
        "require": {
            // ...
           "krushnaghodke/translation-bundle": "dev-master"
        }
    }

Then, you can install the new dependencies by running Composer's ``update`` command from the directory
where your ``composer.json`` file is located:

.. code-block :: bash

    $ php composer.phar install

Now, Composer will automatically download all required files, and install them for you.
All that is left to do is to update your ``AppKernel.php`` file, and register the new bundle:

    <?php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
           new Krushnaghodke\TranslationBundle\KrushnaghodkeTranslationBundle(),
        );
    }


## Configuration

Update following code in config.yml.

    # app/config.yml
    krushnaghodke_translation:
        api_key: %yandex_api_key%


## Usage

Below is a brief demonstration illustrating the process of translating your initial string using the Yandex API. It is presumed that the configuration has been appropriately established:

    <?php

    $translation = $this->get('krushnaghodke.translation.manager');
    $result = $translation->translate("This is testing string", 'en-hi');

