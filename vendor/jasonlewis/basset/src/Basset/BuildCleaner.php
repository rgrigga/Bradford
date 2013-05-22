<?php namespace Basset;

use FilesystemIterator;
use Basset\Manifest\Repository;
use Illuminate\Filesystem\Filesystem;

class BuildCleaner {

    /**
     * Manifest repository instance.
     *
     * @var Basset\Manifest\Repository
     */
    protected $manifest;

    /**
     * Illuminate filesystem instance.
     *
     * @var Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Path to built collections.
     *
     * @var string
     */
    protected $buildPath;

    /**
     * Create a new build cleaner instance.
     *
     * @param  Basset\Manifest\Repository  $manifest
     * @param  Illuminate\Filesystem\Filesystem  $files
     * @param  string  $buildPath
     * @return void
     */
    public function __construct(Repository $manifest, Filesystem $files, $buildPath)
    {
        $this->manifest = $manifest;
        $this->files = $files;
        $this->buildPath = $buildPath;
    }

    /**
     * Clean all the collections in the manifest.
     *
     * @param  string  $collection
     * @return void
     */
    public function clean($collection = null)
    {
        // If a collection was supplied and it exists in the manifest we'll only clean that
        // collection. Otherwise all the collections will be cleaned.
        if ( ! is_null($collection) and $this->manifest->hasEntry($collection))
        {
            $entry = $this->manifest->getEntry($collection);

            return $this->performCleanup($collection, $entry->getFingerprints());
        }

        foreach ($this->manifest->getEntries() as $collection => $entry)
        {
            $this->performCleanup($collection, $entry->getFingerprints());
        }
    }

    /**
     * Perform the cleanup on the collection and its fingerprints.
     *
     * @param  string  $collection
     * @param  array  $fingerprints
     * @return void
     */
    protected function performCleanup($collection, array $fingerprints)
    {
        foreach ($this->getFilesystemIterator($this->buildPath) as $file)
        {
            $name = $file->getFilename();

            if (isset($fingerprints['stylesheets']) and ! str_is("{$collection}-{$fingerprints['stylesheets']}.css", $name))
            {
                str_is("{$collection}-*.css", $name) and $this->files->delete($file->getPathname());
            }

            if (isset($fingerprints['javascripts']) and ! str_is("{$collection}-{$fingerprints['javascripts']}.js", $name))
            {
                str_is("{$collection}-*.js", $name) and $this->files->delete($file->getPathname());
            }
        }
    }

    /**
     * Get a filesystem iterator instance.
     *
     * @param  string  $path
     * @return FilesystemIterator
     */
    public function getFilesystemIterator($path)
    {
        return new FilesystemIterator($path);
    }

    /**
     * Get the manifest repository instance.
     * 
     * @return Basset\Manifest\Repository
     */
    public function getManifest()
    {
        return $this->manifest;
    }

    /**
     * Get the illuminate filesystem instance.
     * 
     * @return Illuminate\Filesystem\Filesystem
     */
    public function getFiles()
    {
        return $this->files;
    }

}