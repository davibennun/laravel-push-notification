<?php namespace Davibennun\LaravelPushNotification;

class PushNotification {

    public function app($appName)
    {
        return new App(\Config::get('laravel-push-notification::'.$appName));
    }

    public function Message()
    {
        return (new \ReflectionClass('Sly\NotificationPusher\Model\Message'))
            ->newInstanceArgs(func_get_args());
    }
    
    public function Device()
    {
        return (new \ReflectionClass('Sly\NotificationPusher\Model\Device'))
            ->newInstanceArgs(func_get_args());
    }
    
    public function DeviceCollection()
    {
        return (new \ReflectionClass('Sly\NotificationPusher\Collection\DeviceCollection'))
            ->newInstanceArgs(func_get_args());
    }
    
    public function PushManager()
    {
        return (new \ReflectionClass('Sly\NotificationPusher\PushManager'))
            ->newInstanceArgs(func_get_args());
    }
    
    public function ApnsAdapter()
    {
        return (new \ReflectionClass('Sly\NotificationPusher\Adapter\ApnsAdapter'))
            ->newInstanceArgs(func_get_args());
    }
    
    public function GcmAdapter()
    {
        return (new \ReflectionClass('Sly\NotificationPusher\Model\GcmAdapter'))
            ->newInstanceArgs(func_get_args());
    }
    
    public function Push()
    {
        return (new \ReflectionClass('Sly\NotificationPusher\Model\Push'))
            ->newInstanceArgs(func_get_args());
    }

}