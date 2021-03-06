<?php

namespace Drupal\islandora_matomo;

/**
 * Interface IslandoraMatomoServiceInterface.
 */
interface IslandoraMatomoServiceInterface {

  public function queryMatomoApi($url, $mode);
  public function getViewsForNode($nid);
  public function getDownloadsForFile($fid);
  public function getSummedDownloadsForFiles($fids);
  public function getFileFromMedia($mid);

}
