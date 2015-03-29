<?php
/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2013, James L. Parry
 * ------------------------------------------------------------------------
 */
class MY_Controller extends CI_Controller
{
    protected $data = array();      // parameters for view components
    protected $id;                  // identifier for our content
    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    function __construct()
    {
        parent::__construct();
        $this->data = array();
        $this->data['title'] = "Barker Bob's Burger Bar";    // our default title
        $this->errors = array();
        $this->data['pageTitle'] = 'welcome';   // our default page
    }
    /**
     * Render this page
     */
    function render()
    {
        $this->data['content'] = $this->parser->parse($this->data['pagebody'], $this->data, true);
        // finally, build the browser page!
        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }
}
/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */