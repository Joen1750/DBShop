<?php
/**
 * DBShop 电子商务系统
 *
 * ==========================================================================
 * @link      http://www.dbshop.net/
 * @copyright Copyright (c) 2012-2015 DBShop.net Inc. (http://www.dbshop.net)
 * @license   http://www.dbshop.net/license.html License
 * ==========================================================================
 *
 * @author    静静的风
 *
 */

return array(
        'routes' => array(
                'orders' => array(
                        'type'          => 'Literal',
                        'options'       => array(
                                // Change this to something specific to your module
                                'route'    => '/' . DBSHOP_ADMIN_DIR . '/orders',
                                'defaults' => array(
                                        // Change this value to reflect the namespace in which
                                        // the controllers for your module are found
                                        '__NAMESPACE__' => 'Orders\Controller',
                                        'controller'    => 'Orders',
                                        'action'        => 'index',
                                ),
                        ),
                        'may_terminate' => true,
                        'child_routes'  => array(
                                // This route is a sane default when developing a module;
                                // as you solidify the routes for your module, however,
                                // you may want to remove it and replace it with more
                                // specific routes.
                                'default' => array(
                                        'type'          => 'Segment',
                                        'options'       => array(
                                                'route'       => '/[:controller[/:action]]',
                                                'constraints' => array(
                                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                                ),
                                                'defaults'    => array(),
                                        ),
                                        'may_terminate' => true,
                                        'child_routes'  => array(
                                                'order_id' => array(
                                                        'type'    => 'Segment',
                                                        'options' => array(
                                                                'route'       => '/order_id/[:order_id[/:page]]',
                                                                'constraints' => array(
                                                                        'page' => '[0-9_-]+'
                                                                ),
                                                                'defaults'    => array(
                                                                        'page' => 1
                                                                )
                                                        )
                                                ),
                                            'buyer-id' => array(
                                                    'type'    => 'Segment',
                                                    'options' => array(
                                                            'route'       => '[/:buyer_id]/b_page[/:page]',
                                                            'constraints' => array(
                                                                    'page' => '[0-9_-]+'
                                                            ),
                                                            'defaults'    => array(
                                                                    'page' => 1
                                                            )
                                                    )
                                            ),
                                            'refund-id' => array(
                                                'type'    => 'Segment',
                                                'options' => array(
                                                    'route'       => '/refundId[/:refund_id]/repage[/:page]',
                                                    'constraints' => array(
                                                        'page' => '[0-9_-]+'
                                                    ),
                                                    'defaults'    => array(
                                                        'page' => 1
                                                    )
                                                )
                                            ),
                                            'order-express-id' => array(
                                                'type'      => 'Segment',
                                                'options'   => array(
                                                    'route'         => '/express[/:express_id]/e_page[/:page]',
                                                    'constraints'   => array(
                                                        'page' => '[0-9_-]+'
                                                    ),
                                                    'defaults'    => array(
                                                        'page' => 1
                                                    )
                                                )
                                            ),
                                                'page' => array(
                                                        'type'    => 'Segment',
                                                        'options' => array(
                                                                'route'       => '[/:page]',
                                                                'constraints' => array(
                                                                        'page' => '[0-9_-]+'
                                                                ),
                                                                'defaults'    => array(
                                                                        'page' => 1
                                                                )
                                                        )
                                                )
                                        )
                                ),
                        ),
                ),
        //'orders_state' => array()
        )
);
