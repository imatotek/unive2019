
public function index()
{
$predmets=Predmet::all();
// echo '<ul>';
    foreeach ($predmets as $key =>$p) {
    echo '<li>'.$p->nazpred.'</li>';
    }
    return view{'predmet.index',compact('predmets')};