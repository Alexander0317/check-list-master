<?php

/**
 * sfGuardPermissionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardPermissionTable extends PluginsfGuardPermissionTable
{
    /**
     * Returns an instance of this class.
     *
     * @return sfGuardPermissionTable The table instance
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfGuardPermission');
    }
}