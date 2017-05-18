First+Third Admin Pages
=========

Renders fieldmanager fields by page slug

## Usage

Install to plugin directory.

Create a new directory under `wp-content` called `admin-pages`.

Place files in `admin-pages` matching the name of a page slug. These files can contain any fieldmanager fields.

## Example

File: `admin-pages/about.php`

```php
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
```
