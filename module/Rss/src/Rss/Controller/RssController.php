<?php
namespace Rss\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Rss\Model\Rss;          // <-- Add this import
use Rss\Form\RssForm;       // <-- Add this import


class RssController extends AbstractActionController
{
    protected $rssTable;
    
    public function indexAction()
    {
        // grab the paginator from the RssTable
        $paginator = $this->getRssTable()->fetchAll(true);
        // set the current page to what has been passed in query string, or to 1 if none set
        $paginator->setCurrentPageNumber((int)$this->params()->fromQuery('page', 1));
        // set the number of items per page to 10
        $paginator->setItemCountPerPage(10);

        return new ViewModel(array(
            'paginator' => $paginator
        ));
    }

    // Add content to this method:
    public function addAction()
    {
        $form = new RssForm();
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $rss = new Rss();
            $form->setInputFilter($rss->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $rss->exchangeArray($form->getData());
                $this->getRssTable()->saveRss($rss);

                // Redirect to list of rsss
                return $this->redirect()->toRoute('rss');
            }
        }
        return array('form' => $form);
    }

    public function editAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('rss', array(
                'action' => 'add'
            ));
        }

        // Get the Rss with the specified id.  An exception is thrown
        // if it cannot be found, in which case go to the index page.
        try {
            $rss = $this->getRssTable()->getRss($id);
        }
        catch (\Exception $ex) {
            return $this->redirect()->toRoute('rss', array(
                'action' => 'index'
            ));
        }

        $form  = new RssForm();
        $form->bind($rss);
        $form->get('submit')->setAttribute('value', 'Edit');

        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setInputFilter($rss->getInputFilter());
            $form->setData($request->getPost());

            if ($form->isValid()) {
                $this->getRssTable()->saveRss($rss);

                // Redirect to list of rsss
                return $this->redirect()->toRoute('rss');
            }
        }

        return array(
            'id' => $id,
            'form' => $form,
        );
    }

    // Add content to the following method:
    public function deleteAction()
    {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('rss');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $del = $request->getPost('del', 'No');

            if ($del == 'Yes') {
                $id = (int) $request->getPost('id');
                $this->getRssTable()->deleteRss($id);
            }

            // Redirect to list of rsss
            return $this->redirect()->toRoute('rss');
        }

        return array(
            'id'    => $id,
            'rss' => $this->getRssTable()->getRss($id)
        );
    }

    public function getRssTable()
    {
        if (!$this->rssTable) {
            $sm = $this->getServiceLocator();
            $this->rssTable = $sm->get('Rss\Model\RssTable');
        }
        return $this->rssTable;
    }

}
