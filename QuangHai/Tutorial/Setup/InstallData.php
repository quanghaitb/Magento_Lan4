<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace QuangHai\Tutorial\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        /**
         * Install messages
         */
        $data = [
            ['title' => 'title_1','description' => 'description_1','image' => '1.jpeg','status' => 1 ],
            ['title' => 'title_2','description' => 'description_2' => 'miyeon.jpg','status' => 1 ],
            ['title' => 'title_3','description' => 'description_3','image' => 'irene.jpg','status' => 1 ],
            ['title' => 'title_4','description' => 'description_4','image' => 'jisoo.jpg','status' => 1 ],
        ];
        foreach ($data as $bind) {
            $setup->getConnection()
                ->insertForce($setup->getTable('truongcl_blog'), $bind);
        }
    }
}
