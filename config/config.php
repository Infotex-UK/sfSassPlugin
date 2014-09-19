<?php if (!sfConfig::get('sfSassPlugin_dir'))
{
  sfConfig::set('sfSassPlugin_dir', sfConfig::get('sf_root_dir') . DIRECTORY_SEPARATOR . 'plugins' . DIRECTORY_SEPARATOR . 'sfSassPlugin' . DIRECTORY_SEPARATOR);
}