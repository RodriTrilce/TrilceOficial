<?php

namespace App\Http\Controllers\Academia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // $print: containt html pre charge page effect
    if(parse_url(request()->headers->get('referer'), PHP_URL_PATH) == '/')
      $print = "<div id=\"loader-wrapper\"><div id=\"loader\"></div><div class=\"loader-section section-left\"></div><div class=\"loader-section section-right\"></div><div class=\"loader-trilce\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE4AAABOCAYAAACOqiAdAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQyIDc5LjE2MDkyNCwgMjAxNy8wNy8xMy0wMTowNjozOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpBQ0VDNkQ2NDVFOEExMUU4QkEzNkJENkQwNTRDOTFCNCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpBQ0VDNkQ2NTVFOEExMUU4QkEzNkJENkQwNTRDOTFCNCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkFDRUM2RDYyNUU4QTExRThCQTM2QkQ2RDA1NEM5MUI0IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkFDRUM2RDYzNUU4QTExRThCQTM2QkQ2RDA1NEM5MUI0Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+OZkptAAAATZJREFUeNrs3DFKA0EUBmBHcg5vYBcrOy+gB7AQYmVhmxxmU1jZB7yAYGUar5ADBEEESTO+gEocFMysqwa/Hx4JAzOT+Tbzyk055613Od0rBuQtzW16/bpNoy7gwIEDB07AgQMHDpyA6yy9lvOPo65arjGKGlbMu4w6a7n3btT1b8A9pvH0vs0CedB/qpy6+Ia9H1xVPW5ze9zFGvNnG37++Zrn/Rwu+sbJf/nXxFmXD/7L582Nq6rHgQMHTsCBAwcOnIADBw6cgAMHDhw4AQcOHDhwAg4cOHACDhw4cOAEHDhw4MAJOHDgwIETcODAgZMiqXxjYUqps83yoH8QHzvF8FHUYcVyN1FNMTZP4+mks9+/YtX74Qd1Xon0UfZfajV3URNXVY8DJ+DAgQMHTsCB+xt5FmAA+WYvMu4eSI8AAAAASUVORK5CYII=\" alt=\"\"></div></div>";
    else
    $print = '';
    

    return view('/academia/index')->with(['print' => $print]);
  }
}
