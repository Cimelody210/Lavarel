use App\Http\Controller\WebController;
Auth:: routes();
Router:: middleware(['auth','admin']) -> prefix("admin") -> group(function(){
    include_once("admin.php");
});