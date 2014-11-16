<?php
    App::uses('AppModel', 'Model');
    /**
     * User Model
     */
class Map extends AppModel
{

    public $actsAs = array(
        'AuditLog.Auditable' => array( // 'ignore' => array('active', 'name', 'updated')
            //,'habtm'  => array( 'Type', 'Project' )
        )
    );

    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ));
}