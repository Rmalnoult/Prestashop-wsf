<?php

class LookBookControllerCore extends FrontController
{
    public function init()
    {
        parent::init();
        $pack_id = 8;
        $product_id = 2;
        $lang_id = $this->context->cookie->id_lang;

        $pack = Pack::getItems($pack_id, $lang_id);


        // get a product
        $product = new Product($product_id, false, $lang_id);

        $this->context->smarty->assign([
            'pack' => $pack,
        ]);


    }
    public function initContent()
    {
        parent::initContent();
        $this->setTemplate(_PS_THEME_DIR_.'lookbook.tpl');
    }
}
