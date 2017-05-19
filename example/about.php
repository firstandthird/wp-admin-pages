<?php
remove_post_type_support('page', 'editor');
$group = new Fieldmanager_Group(array(
  'name' => 'About',
  'tabbed' => 'vertical',
  'children' => array(
    'projects' => new Fieldmanager_Group(array(
      'name' => 'projects',
      'label' => 'Projects',
      'children' => array(
        'title' => new Fieldmanager_TextField('Title'),
        'text' => new Fieldmanager_TextArea('Text')
      )
    ))
  )
));
$group->add_meta_box('About', 'page');
