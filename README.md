# TranslationBundle ![](https://secure.travis-ci.org/richsage/RMSPushNotificationsBundle.png)

A bundle to translate string using yandex API.  Currently supports only yandex. Google translation API is in TODO list.

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

.. code-block :: yml

     # app/config.yml
    krushnaghodke_yandex_translation:
        api_key: %yandex_api_key%


## Usage

A little example of how to translate your first string with yandex API, we'll assume that you've set up the configuration correctly:

.. code-block :: php

    <?php

    $translation = $this->get('krushnaghodke.translation.manager');
    $result = $translation->translate("This is testing string", 'en-hi');

