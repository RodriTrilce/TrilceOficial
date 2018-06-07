<?php
namespace App\Http\Controllers\Colegio;

define('FPDF_FONTPATH', '/var/www/html/trilce/storage/app/academia/pdf/fonts/');

use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \setasign\Fpdi\Fpdi;

class PruebaController extends Controller
{
    public function index(){

      $storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
      $theme        = Storage::disk('local')->url('formato_matricula.pdf');

      $pdf = new FPDI();
    
      $pdf->AddFont('33FA0F_E_0','','33FA0F_E_0.php');
      $pdf->AddPage('L','A4');
      $pdf->setSourceFile($storagePath.'academia/pdf/formato_matricula.pdf');
      $pdf->useTemplate($pdf->importPage(1), 1, 3, 150);

      $pdf->setSourceFile($storagePath.'academia/pdf/formato_matricula_terminos-y-condiciones.pdf');
      $pdf->useTemplate($pdf->importPage(1), 140, 3, 150);

      $pdf->SetFont('33FA0F_E_0');
      $pdf->SetFontSize(8.5);
      $pdf->SetTextColor(0, 0, 0);
      
      // Inicio
      $pdf->SetXY(112, 24);
      $pdf->Write(0, '01/01/2222');
      
      // DNI
      $pdf->SetXY(16, 43);
      $pdf->Write(0, '74065855');
      
      // Ciclo
      $pdf->SetXY(47, 43);
      $pdf->Write(0, 'Semestral');
      
      // Condición
      $pdf->SetXY(78, 43);
      $pdf->Write(0, 'P');
      
      // Sede
      $pdf->SetXY(16, 55);
      $pdf->Write(0, 'Torrico');
      
      // Universidad
      $pdf->SetXY(47, 55);
      $pdf->Write(0, 'San Marcos');
      
      // Apellido paterno
      $pdf->SetXY(16, 76.5);
      $pdf->Write(0, 'Salcedo');
      
      // Apellido Materno
      $pdf->SetXY(47, 76.5);
      $pdf->Write(0, 'Castro');
      
      // Nombres
      $pdf->SetXY(78, 76.5);
      $pdf->Write(0, 'Franco Manuel');
      
      // Telefono
      $pdf->SetXY(108, 76.5);
      $pdf->Write(0, '999999999');
      
      // Direccion
      $pdf->SetXY(16, 88);
      $pdf->Write(0, 'Av siempre viva 221');
      
      // Email
      $pdf->SetXY(78, 88);
      $pdf->Write(0, 'fsalcedo@trilce.edu.pe');
      
      // Finalizo Colegio
      $pdf->SetXY(23, 100);
      $pdf->Write(0, '2018');
      
      // Colegio
      $pdf->SetXY(47, 100);
      $pdf->Write(0, 'Cesar Vallejo');
      
      // Universidad postula
      $pdf->SetXY(16, 111.5);
      $pdf->Write(0, 'San Marcos');
      
      // Carrera postula
      $pdf->SetXY(78, 111.5);
      $pdf->Write(0, 'Ing de Software');
      
      // Antigua academia
      $pdf->SetXY(16, 123);
      $pdf->Write(0, 'Aduni');
      
      // Apoderado: Apellidos y nombres
      $pdf->SetXY(16, 145);
      $pdf->Write(0, 'Salcedo padre nombre');

      // Apoderado: Ocupacion
      $pdf->SetXY(78, 145);
      $pdf->Write(0, 'Profesor');
      
      // Apoderado: DNI
      $pdf->SetXY(16, 156.5);
      $pdf->Write(0, '74065855');
      
      // Apoderado: Centro de trabajo
      $pdf->SetXY(47, 156.5);
      $pdf->Write(0, '74065855');
      
      // Apoderado: Telefono trabajo
      $pdf->SetXY(78, 168);
      $pdf->Write(0, '74065855');
      
      // Apoderado: Telefono emergencia
      $pdf->SetXY(108, 168);
      $pdf->Write(0, '74065855');
      
      // Fecha: Día
      $pdf->SetXY(104.5, 180.5);
      $pdf->Write(0, '12');
      
      // Fecha: Mes
      $pdf->SetXY(113.5, 180.5);
      $pdf->Write(0, 'Mayo');
      
      // Fecha: Año
      $pdf->SetXY(132, 180.5);
      $pdf->Write(0, date("y"));
      

      $pdf->SetTitle("Ficha de inscripción", true);
      $pdf->SetAuthor("Trilce");

      $pdf->Output('i');

      // guardar el pdf
      // Storage::disk('local')->put('public/ficha-inscripcion-franco.pdf', $pdf->Output('', 's'));
      // echo asset('storage/ficha-inscripcion-franco.pdf');
    }
    
    
}



/*



Storage::disk('local')->put('file.txt', 'Contents');




*/