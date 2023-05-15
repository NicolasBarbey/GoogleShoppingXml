<?php

namespace GoogleShoppingXml\Form;

use GoogleShoppingXml\GoogleShoppingXml;
use Thelia\Core\Translation\Translator;
use Thelia\Form\BaseForm;

class FeedManagementForm extends BaseForm
{
    protected function buildForm()
    {
        $this->formBuilder
            ->add('id', 'number', array(
                'required' => false
            ))
            ->add('feed_label', 'text', array(
                'required' => true,
                'label' => Translator::getInstance()->trans('Feed label', array(), GoogleShoppingXml::DOMAIN_NAME),
                'label_attr' => array(
                    'for' => 'title'
                ),
            ))
            ->add('lang_id', 'text', array(
                'required' => true,
                'label' => Translator::getInstance()->trans('Lang', array(), GoogleShoppingXml::DOMAIN_NAME),
                'label_attr' => array(
                    'for' => 'lang_id'
                )
            ))
            ->add('country_id', 'text', array(
                'required' => true,
                'label' => Translator::getInstance()->trans('Country', array(), GoogleShoppingXml::DOMAIN_NAME),
                'label_attr' => array(
                    'for' => 'country_id'
                )
            ))
            ->add("currency_id", 'text', array(
                'required' => true,
                'label' => Translator::getInstance()->trans('Currency', array(), GoogleShoppingXml::DOMAIN_NAME),
                'label_attr' => array(
                    'for' => 'currency_id'
                )
            ));
    }
}
