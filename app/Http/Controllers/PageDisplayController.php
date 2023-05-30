<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Models\Linktree;
use App\Repositories\PageRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageDisplayController extends Controller
{
  public function show(string $slug, PageRepository $pageRepository): View
  {
    $page = $pageRepository->forSlug($slug);

    if (!$page) {
      abort(404);
    }

    return view('site.page', ['item' => $page]);
  }

  public function home(): View
  {
    if (TwillAppSettings::get('homepage.homepage.page')->isNotEmpty()) {
      /** @var \App\Models\Page $frontPage */
      $frontPage = TwillAppSettings::get('homepage.homepage.page')->first();

      if ($frontPage->published) {
        return view('site.page', ['item' => $frontPage]);
      }
    }

    abort(404);
  }
  public function linktree(): View
  {
    /** @var \App\Models\Page $frontPage */
    $linktree = Linktree::all()[0];
    if ($linktree) {
      return view('site.linktree', ['item' => $linktree]);
    }

    abort(404);
  }
}
