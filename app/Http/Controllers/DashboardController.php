<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class DashboardController extends Controller
{
    /**
     * Exibe a view do Dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Definindo um título para a página
        $title = 'Dashboard';
 
        // Retorna a view 'dashboard' com a variável $title
        return view('dashboard', compact('title'));
    }
}