<?php

    namespace Sandbox;

    use Dez\Session\Adapter\Files
        as NativeSession;
    use Dez\Session\Adapter\CustomFiles
        as CustomFilesSession;


    error_reporting(1); ini_set('display_errors', 1);

    include_once '../vendor/autoload.php';

    try {

        $session    = new CustomFilesSession([
            'directory'     => __DIR__ . '/_sessions'
        ]);

        $session->setName( 'dez-session' );
        $session->setId( 'dez-session-'. sha1( __FILE__ ) );

        $session->start();

//        $session->set( 'test', [ '123123' ] );

//    $session->set( 'var_'.rand(1000000,9999999), [ rand(1000000,9999999), md5( rand(1000000,9999999) ) ] );

        var_dump($session, $_SESSION);

    } catch ( \Exception $e ) {
        die( get_class( $e ) . ': ' . $e->getMessage() );
    }