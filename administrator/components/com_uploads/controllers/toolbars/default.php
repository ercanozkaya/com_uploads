<?php 

class ComUploadsControllerToolbarMenubar extends ComDefaultControllerToolbarMenubar
{
    public function getCommands()
    {
        $active = $this->getController()->getView()->getLayout();

        $this->addCommand('Manage', array(
            'href'   => JRoute::_('index.php?option=com_uploads&view=manage&layout=default'),
            'active' => $active === 'default'
        ));
        
        $this->addCommand('Upload', array(
            'href'   => JRoute::_('index.php?option=com_uploads&view=manage&layout=upload'),
            'active' => $active === 'upload'
        ));
        
        return parent::getCommands();
    }
}