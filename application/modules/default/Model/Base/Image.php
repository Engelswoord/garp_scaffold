<?php
/* This file was generated by Garp_Spawn_Php_Model_Base - do not edit */
class Model_Base_Image extends Garp_Model_Db {
    protected $_name = 'image';

    protected $_primary = 'id';

    protected $_configuration = array('id' => 'Image', 'order' => 'created DESC', 'label' => 'Image', 'description' => null, 'route' => null, 'creatable' => true, 'deletable' => true, 'quickAddable' => true, 'comment' => null, 'visible' => true, 'module' => 'garp', 'fields' => array(array('name' => 'id', 'required' => true, 'type' => 'numeric', 'maxLength' => 8, 'multiline' => null, 'label' => 'Id', 'editable' => false, 'visible' => false, 'default' => null, 'primary' => true, 'unique' => false, 'info' => null, 'index' => true, 'multilingual' => false, 'comment' => null, 'wysiwyg' => false, 'options' => array(), 'float' => false, 'unsigned' => true, 'rich' => false, 'origin' => 'config', 'relationType' => null), array('name' => 'filename', 'required' => true, 'type' => 'imagefile', 'maxLength' => 255, 'multiline' => null, 'label' => 'Filename', 'editable' => true, 'visible' => true, 'default' => null, 'primary' => false, 'unique' => false, 'info' => null, 'index' => null, 'multilingual' => false, 'comment' => null, 'wysiwyg' => false, 'options' => array(), 'float' => false, 'unsigned' => true, 'rich' => false, 'origin' => 'config', 'relationType' => null), array('name' => 'caption', 'required' => false, 'type' => 'text', 'maxLength' => 255, 'multiline' => true, 'label' => 'Caption', 'editable' => true, 'visible' => true, 'default' => null, 'primary' => false, 'unique' => false, 'info' => null, 'index' => null, 'multilingual' => false, 'comment' => null, 'wysiwyg' => false, 'options' => array(), 'float' => false, 'unsigned' => true, 'rich' => false, 'origin' => 'config', 'relationType' => null), array('name' => 'created', 'required' => true, 'type' => 'datetime', 'maxLength' => null, 'multiline' => null, 'label' => 'Created', 'editable' => false, 'visible' => true, 'default' => null, 'primary' => false, 'unique' => false, 'info' => null, 'index' => null, 'multilingual' => false, 'comment' => null, 'wysiwyg' => false, 'options' => array(), 'float' => false, 'unsigned' => true, 'rich' => false, 'origin' => 'behavior', 'relationType' => null), array('name' => 'modified', 'required' => true, 'type' => 'datetime', 'maxLength' => null, 'multiline' => null, 'label' => 'Modified', 'editable' => false, 'visible' => true, 'default' => null, 'primary' => false, 'unique' => false, 'info' => null, 'index' => null, 'multilingual' => false, 'comment' => null, 'wysiwyg' => false, 'options' => array(), 'float' => false, 'unsigned' => true, 'rich' => false, 'origin' => 'behavior', 'relationType' => null), array('name' => 'author_id', 'required' => false, 'type' => 'numeric', 'maxLength' => null, 'multiline' => null, 'label' => 'Created by', 'editable' => false, 'visible' => false, 'default' => null, 'primary' => null, 'unique' => false, 'info' => null, 'index' => null, 'multilingual' => false, 'comment' => null, 'wysiwyg' => false, 'options' => array(), 'float' => false, 'unsigned' => true, 'rich' => false, 'origin' => 'relation', 'relationType' => 'hasOne'), array('name' => 'modifier_id', 'required' => false, 'type' => 'numeric', 'maxLength' => null, 'multiline' => null, 'label' => 'Modified by', 'editable' => false, 'visible' => false, 'default' => null, 'primary' => null, 'unique' => false, 'info' => null, 'index' => null, 'multilingual' => false, 'comment' => null, 'wysiwyg' => false, 'options' => array(), 'float' => false, 'unsigned' => true, 'rich' => false, 'origin' => 'relation', 'relationType' => 'hasOne')), 'behaviors' => array(), 'relations' => array('Author' => array('model' => 'User', 'name' => 'Author', 'type' => 'hasOne', 'label' => 'Created by', 'limit' => 1, 'column' => 'author_id', 'simpleSelect' => null, 'max' => null, 'paginated' => null, 'multilingual' => null, 'primary' => null, 'info' => null, 'visible' => true, 'editable' => true, 'inverse' => false, 'oppositeRule' => 'Author', 'inverseLabel' => 'Image', 'weighable' => false, 'required' => false, 'inputs' => null, 'inline' => false, 'mirrored' => false, 'bindingModel' => false), 'Modifier' => array('model' => 'User', 'name' => 'Modifier', 'type' => 'hasOne', 'label' => 'Modified by', 'limit' => 1, 'column' => 'modifier_id', 'simpleSelect' => null, 'max' => null, 'paginated' => null, 'multilingual' => null, 'primary' => null, 'info' => null, 'visible' => true, 'editable' => false, 'inverse' => false, 'oppositeRule' => 'Modifier', 'inverseLabel' => 'Image', 'weighable' => false, 'required' => false, 'inputs' => null, 'inline' => false, 'mirrored' => false, 'bindingModel' => false), 'PlaceholderImage' => array('model' => 'Video', 'name' => 'PlaceholderImage', 'type' => 'hasMany', 'label' => 'Video', 'limit' => null, 'column' => 'image_id', 'simpleSelect' => null, 'max' => null, 'paginated' => null, 'multilingual' => null, 'primary' => null, 'info' => null, 'visible' => true, 'editable' => true, 'inverse' => true, 'oppositeRule' => 'PlaceholderImage', 'inverseLabel' => 'Placeholder Image', 'weighable' => false, 'required' => false, 'inputs' => null, 'inline' => false, 'mirrored' => true, 'bindingModel' => false), 'Snippet' => array('model' => 'Snippet', 'name' => 'Snippet', 'type' => 'hasMany', 'label' => 'Snippet', 'limit' => null, 'column' => 'image_id', 'simpleSelect' => null, 'max' => null, 'paginated' => null, 'multilingual' => null, 'primary' => null, 'info' => null, 'visible' => true, 'editable' => true, 'inverse' => true, 'oppositeRule' => 'Image', 'inverseLabel' => 'Image', 'weighable' => false, 'required' => false, 'inputs' => null, 'inline' => false, 'mirrored' => true, 'bindingModel' => false)), 'unique' => null);

    protected $_listFields = array('filename');

    protected $_jointView = 'image_joint';

    protected $_defaultOrder = 'created DESC';

    protected $_bindable = array(
        'Model_Snippet',
        'Model_User',
        'Model_Video'
    );

    protected $_referenceMap = array(
        'Author' => array(
            'refTableClass' => 'Model_User',
            'columns' => 'author_id',
            'refColumns' => 'id'
        ),
        'Modifier' => array(
            'refTableClass' => 'Model_User',
            'columns' => 'modifier_id',
            'refColumns' => 'id'
        )
    );


    public function init() {
        parent::init();
        $this->registerObserver(new Garp_Model_Behavior_Timestampable());
        $this->registerObserver(new Garp_Model_Behavior_Authorable());
        $this->registerObserver(new Garp_Model_Validator_NotEmpty(array('filename', 'created', 'modified')));
        $this->registerObserver(new Garp_Model_Behavior_Truncatable(array('columns' => array('caption' => 255))));
    }

}