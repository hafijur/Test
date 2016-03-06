<?
class HafijurController extends Controller
{
public function actionHafijur()
	{
	$a=array('name'=>'Hafijur','ID'=>12510359,'univarsity'=>'Univarsity Of Information Technology');
	
	$this->render('hafijur',$a);
	}
	
}