<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	protected $assetsUrl;
	
	public function beforeRender($view)
	{
		$this->_loadDefaultScripts();
		
		return true;
	}
	
	private function _loadDefaultScripts()
	{
		try
		{
			$clientScript = Yii::app()->clientScript;
				
			$clientScript->registerScriptFile($this->getAssetsUrl() . '/jquery/jquery.js', CClientScript::POS_END);
			$clientScript->registerScriptFile($this->getAssetsUrl() . '/jui/js/jquery-ui.min.js', CClientScript::POS_END);
			$clientScript->registerScriptFile($this->getAssetsUrl() . '/js/main.js', CClientScript::POS_END);
			
			$clientScript->registerCssFile($this->getAssetsUrl() . '/css/reset.css');
			$clientScript->registerCssFile($this->getAssetsUrl() . '/css/main.css');
		}
		catch (Exception $e)
		{
			throw new Exception('N‹o foi poss’vel carregar os assets: '. $e->getMessage());
		}
			
	}
	
	public function getAssetsUrl()
	{
		if($this->assetsUrl === null)
		{
			$this->assetsUrl = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('application.assets'), false, -1, YII_DEBUG);
		}
		
		return $this->assetsUrl;
	}
	
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
}