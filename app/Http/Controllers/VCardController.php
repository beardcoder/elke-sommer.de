<?php

namespace App\Http\Controllers;

use App\Models\Linktree;
use Illuminate\Http\Request;
use JeroenDesloovere\VCard\VCard;

class VCardController extends Controller
{
  public function index()
  {
    $linktree = Linktree::all()[0];

    $vcard = new VCard();
    $vcard->addName('Sommer', 'Elke');
    $vcard->addEmail($linktree->email);
    $vcard->addPhoneNumber($linktree->phone, 'WORK');
    $vcard->addURL('https://elke-sommer.de');
    $vcard->addPhotoContent(
      file_get_contents($linktree->image('avatar', 'default'))
    );

    return $vcard->download();
  }
}
