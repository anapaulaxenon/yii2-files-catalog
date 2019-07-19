<?php
/**
 *
 * Developed by Waizabú <code@waizabu.com>
 *
 *
 */

namespace eseperio\filescatalog\actions;


use eseperio\filescatalog\models\Directory;
use Faker\Factory;
use Ramsey\Uuid\Uuid;
use yii\base\Action;
use yii\base\InvalidArgumentException;

/**
 * Class FakeAction
 * Fakes data for testing purposes
 * @package eseperio\filescatalog\actions
 */
class FakeAction extends Action
{
    public $ext = [
        "3g2",
        "3ga",
        "3gp",
        "7z",
        "aa",
        "aac",
        "ac",
        "accdb",
        "accdt",
        "adn",
        "ai",
        "aif",
        "aifc",
        "aiff",
        "ait",
        "amr",
        "ani",
        "apk",
        "app",
        "applescript",
        "asax",
        "asc",
        "ascx",
        "asf",
        "ash",
        "ashx",
        "asmx",
        "asp",
        "aspx",
        "asx",
        "au",
        "aup",
        "avi",
        "axd",
        "aze",
        "bak",
        "bash",
        "bat",
        "bin",
        "blank",
        "bmp",
        "bowerrc",
        "bpg",
        "browser",
        "bz2",
        "c",
        "cab",
        "cad",
        "caf",
        "cal",
        "cd",
        "cer",
        "cfg",
        "cfm",
        "cfml",
        "cgi",
        "class",
        "cmd",
        "codekit",
        "coffee",
        "coffeelintignore",
        "com",
        "compile",
        "conf",
        "config",
        "cpp",
        "cptx",
        "cr2",
        "crdownload",
        "crt",
        "crypt",
        "cs",
        "csh",
        "cson",
        "csproj",
        "css",
        "csv",
        "cue",
        "dat",
        "db",
        "dbf",
        "deb",
        "dgn",
        "dist",
        "diz",
        "dll",
        "dmg",
        "dng",
        "doc",
        "docb",
        "docm",
        "docx",
        "dot",
        "dotm",
        "dotx",
        "download",
        "dpj",
        "ds_store",
        "dtd",
        "dwg",
        "dxf",
        "editorconfig",
        "el",
        "enc",
        "eot",
        "eps",
        "epub",
        "eslintignore",
        "exe",
        "f4v",
        "fax",
        "fb2",
        "fla",
        "flac",
        "flv",
        "folder",
        "gadget",
        "gdp",
        "gem",
        "gif",
        "gitattributes",
        "gitignore",
        "go",
        "gpg",
        "gz",
        "h",
        "handlebars",
        "hbs",
        "heic",
        "hs",
        "hsl",
        "htm",
        "html",
        "ibooks",
        "icns",
        "ico",
        "ics",
        "idx",
        "iff",
        "ifo",
        "image",
        "img",
        "in",
        "indd",
        "inf",
        "ini",
        "iso",
        "j2",
        "jar",
        "java",
        "jpe",
        "jpeg",
        "jpg",
        "js",
        "json",
        "jsp",
        "jsx",
        "key",
        "kf8",
        "kmk",
        "ksh",
        "kup",
        "less",
        "lex",
        "licx",
        "lisp",
        "lit",
        "lnk",
        "lock",
        "log",
        "lua",
        "m",
        "m2v",
        "m3u",
        "m3u8",
        "m4",
        "m4a",
        "m4r",
        "m4v",
        "map",
        "master",
        "mc",
        "md",
        "mdb",
        "mdf",
        "me",
        "mi",
        "mid",
        "midi",
        "mk",
        "mkv",
        "mm",
        "mo",
        "mobi",
        "mod",
        "mov",
        "mp2",
        "mp3",
        "mp4",
        "mpa",
        "mpd",
        "mpe",
        "mpeg",
        "mpg",
        "mpga",
        "mpp",
        "mpt",
        "msi",
        "msu",
        "nef",
        "nes",
        "nfo",
        "nix",
        "npmignore",
        "odb",
        "ods",
        "odt",
        "ogg",
        "ogv",
        "ost",
        "otf",
        "ott",
        "ova",
        "ovf",
        "p12",
        "p7b",
        "pages",
        "part",
        "pcd",
        "pdb",
        "pdf",
        "pem",
        "pfx",
        "pgp",
        "ph",
        "phar",
        "php",
        "pkg",
        "pl",
        "plist",
        "pm",
        "png",
        "po",
        "pom",
        "pot",
        "potx",
        "pps",
        "ppsx",
        "ppt",
        "pptm",
        "pptx",
        "prop",
        "ps",
        "ps1",
        "psd",
        "psp",
        "pst",
        "pub",
        "py",
        "pyc",
        "qt",
        "ra",
        "ram",
        "rar",
        "raw",
        "rb",
        "rdf",
        "resx",
        "retry",
        "rm",
        "rom",
        "rpm",
        "rsa",
        "rss",
        "rtf",
        "ru",
        "rub",
        "sass",
        "scss",
        "sdf",
        "sed",
        "sh",
        "sitemap",
        "skin",
        "sldm",
        "sldx",
        "sln",
        "sol",
        "sql",
        "sqlite",
        "step",
        "stl",
        "svg",
        "swd",
        "swf",
        "swift",
        "sys",
        "tar",
        "tcsh",
        "tex",
        "tfignore",
        "tga",
        "tgz",
        "tif",
        "tiff",
        "tmp",
        "torrent",
        "ts",
        "tsv",
        "ttf",
        "twig",
        "txt",
        "udf",
        "vb",
        "vbproj",
        "vbs",
        "vcd",
        "vcs",
        "vdi",
        "vdx",
        "vmdk",
        "vob",
        "vscodeignore",
        "vsd",
        "vss",
        "vst",
        "vsx",
        "vtx",
        "war",
        "wav",
        "wbk",
        "webinfo",
        "webm",
        "webp",
        "wma",
        "wmf",
        "wmv",
        "woff",
        "woff2",
        "wps",
        "wsf",
        "xaml",
        "xcf",
        "xlm",
        "xls",
        "xlsm",
        "xlsx",
        "xlt",
        "xltm",
        "xltx",
        "xml",
        "xpi",
        "xps",
        "xrb",
        "xsd",
        "xsl",
        "xspf",
        "xz",
        "yaml",
        "yml",
        "z",
        "zip",
        "sqo",
        "zsh"
    ];


    public function run()
    {


        \Yii::$app->db->createCommand()->truncateTable('fcatalog_inodes')->execute();
        $model = new Directory();
        $model->name = "Root";
        $model->uuid = (string)Uuid::uuid4();

        if (!$model->makeRoot()->save())
            throw new InvalidArgumentException('Something went wrong ' . nl2br(print_r($model->errors, true)));


        $faker = Factory::create('es_ES');
        foreach (range(0, 100) as $item) {
            $modelb = new Directory();
            $modelb->uuid = (string)Uuid::uuid4();
            $modelb->name = $faker->words(3, true);
            $modelb->parent_id = $model->id;
            if (!$modelb->appendTo($model)->save()) {
                throw new InvalidArgumentException('Something went wrong ' . nl2br(print_r($model->errors, true)));
            } else {
                if ($item > 25)
                    $model = clone($modelb);
            }

        }

        return $this->controller->redirect('index');

    }
}
