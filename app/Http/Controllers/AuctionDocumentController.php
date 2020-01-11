<?php

namespace App\Http\Controllers;

use App\AuctionDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuctionDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($auction,Request $request)
    {
         
        $this->validate($request, ["document_date.*"=>"required",
                                    "document_type.*"=>"required",
                                    "remarks.*"=>"required",
                                    "file"=> "required",
                                    "file.*"=> "required|file|min:1|max:10000|mimes:pdf,jpeg,jpg,png |max:4096",

                                    
                                    ],[
                                        'file.*.required' => 'Please upload an file only',
                                        'file.*.mimes' => 'Only jpeg, png, jpg and bmp images are allowed',
                                        'file.*.max' => 'Sorry! Maximum allowed size for an image is 2MB',
                                  ]);
        $data=array(); 
        if($request['document_date']){
            $request['document_date']=date ("Y-m-d",strtotime($request['document_date']));
        }
        if($request->hasfile('file')){
            $count=count($request->file('file'));
            for ($x = 0; $x <= $count-1; $x++) {
                 $image=$request->file('file')[$x];
                $destinationPath = storage_path('document');
                $extension = $image->getClientOriginalExtension(); 
                $fileName = date("YmdHisu").'.' .$extension;
                $upload_success = $image->move($destinationPath, $fileName);
                $url= Storage::url('document/'.$fileName);
                $data[]=array('auction_id'=>$auction, 
                              'document_id'=>$request['document_type'][$x],
                              'document_date'=>$request['document_date'],
                              'remarks'=>$request['remarks'][$x], 
                              'document'=>$fileName,
                              'created_by'=>auth()->user()->id
                            );
            }
            AuctionDocument::insert($data);
            
            return  $arr = array('message' => 'Added data successfully');
                                     
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AuctionDocument  $auctionDocument
     * @return \Illuminate\Http\Response
     */
    public function show(AuctionDocument $auctionDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AuctionDocument  $auctionDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(AuctionDocument $auctionDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AuctionDocument  $auctionDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuctionDocument $auctionDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AuctionDocument  $auctionDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuctionDocument $auctionDocument)
    {
        //
    }

    public function download(Request $request){
        $doc= AuctionDocument::where('id',$request['id'])->first();
        $extension = explode('.',$doc->document);
        $exe= array_slice($extension, -1)[0];
        $headers = array('Content-Type' => $this->mimeType($exe));
        $url = storage_path('document/'.$doc->document);
        $response = response()->download($url,'document',$headers);
        ob_end_clean();
         return $response;
    }
     public function mimeType($exe){
         $mime_types = array("323" => "text/h323",
                 "acx" => "application/internet-property-stream",
                 "ai" => "application/postscript",
                 "aif" => "audio/x-aiff",
                 "aifc" => "audio/x-aiff",
                 "aiff" => "audio/x-aiff",
                 "asf" => "video/x-ms-asf",
                 "asr" => "video/x-ms-asf",
                 "asx" => "video/x-ms-asf",
                 "au" => "audio/basic",
                 "avi" => "video/x-msvideo",
                 "axs" => "application/olescript",
                 "bas" => "text/plain",
                 "bcpio" => "application/x-bcpio",
                 "bin" => "application/octet-stream",
                 "bmp" => "image/bmp",
                 "c" => "text/plain",
                 "cat" => "application/vnd.ms-pkiseccat",
                 "cdf" => "application/x-cdf",
                 "cer" => "application/x-x509-ca-cert",
                 "class" => "application/octet-stream",
                 "clp" => "application/x-msclip",
                 "cmx" => "image/x-cmx",
                 "cod" => "image/cis-cod",
                 "cpio" => "application/x-cpio",
                 "crd" => "application/x-mscardfile",
                 "crl" => "application/pkix-crl",
                 "crt" => "application/x-x509-ca-cert",
                 "csh" => "application/x-csh",
                 "css" => "text/css",
                 "dcr" => "application/x-director",
                 "der" => "application/x-x509-ca-cert",
                 "dir" => "application/x-director",
                 "dll" => "application/x-msdownload",
                 "dms" => "application/octet-stream",
                 "doc" => "application/msword",
                 "docx"=> "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
                 "dot" => "application/msword",
                 "dvi" => "application/x-dvi",
                 "dxr" => "application/x-director",
                 "eps" => "application/postscript",
                 "etx" => "text/x-setext",
                 "evy" => "application/envoy",
                 "exe" => "application/octet-stream",
                 "fif" => "application/fractals",
                 "flr" => "x-world/x-vrml",
                 "gif" => "image/gif",
                 "gtar" => "application/x-gtar",
                 "gz" => "application/x-gzip",
                 "h" => "text/plain",
                 "hdf" => "application/x-hdf",
                 "hlp" => "application/winhlp",
                 "hqx" => "application/mac-binhex40",
                 "hta" => "application/hta",
                 "htc" => "text/x-component",
                 "htm" => "text/html",
                 "html" => "text/html",
                 "htt" => "text/webviewhtml",
                 "ico" => "image/x-icon",
                 "ief" => "image/ief",
                 "iii" => "application/x-iphone",
                 "ins" => "application/x-internet-signup",
                 "isp" => "application/x-internet-signup",
                 "jfif" => "image/pipeg",
                 "jpe" => "image/jpeg",
                 "jpeg" => "image/jpeg",
                 "JPG"  => "image/jpeg",
                 "jpg" => "image/jpeg",
                 "js" => "application/x-javascript",
                 "latex" => "application/x-latex",
                 "lha" => "application/octet-stream",
                 "lsf" => "video/x-la-asf",
                 "lsx" => "video/x-la-asf",
                 "lzh" => "application/octet-stream",
                 "m13" => "application/x-msmediaview",
                 "m14" => "application/x-msmediaview",
                 "m3u" => "audio/x-mpegurl",
                 "man" => "application/x-troff-man",
                 "mdb" => "application/x-msaccess",
                 "me" => "application/x-troff-me",
                 "mht" => "message/rfc822",
                 "mhtml" => "message/rfc822",
                 "mid" => "audio/mid",
                 "mny" => "application/x-msmoney",
                 "mov" => "video/quicktime",
                 "movie" => "video/x-sgi-movie",
                 "mp2" => "video/mpeg",
                 "mp3" => "audio/mpeg",
                 "mpa" => "video/mpeg",
                 "mpe" => "video/mpeg",
                 "mpeg" => "video/mpeg",
                 "mpg" => "video/mpeg",
                 "mpp" => "application/vnd.ms-project",
                 "mpv2" => "video/mpeg",
                 "ms" => "application/x-troff-ms",
                 "mvb" => "application/x-msmediaview",
                 "nws" => "message/rfc822",
                 "oda" => "application/oda",
                 "p10" => "application/pkcs10",
                 "p12" => "application/x-pkcs12",
                 "p7b" => "application/x-pkcs7-certificates",
                 "p7c" => "application/x-pkcs7-mime",
                 "p7m" => "application/x-pkcs7-mime",
                 "p7r" => "application/x-pkcs7-certreqresp",
                 "p7s" => "application/x-pkcs7-signature",
                 "pbm" => "image/x-portable-bitmap",
                 "pdf" => "application/pdf",
                 "pfx" => "application/x-pkcs12",
                 "pgm" => "image/x-portable-graymap",
                 "pko" => "application/ynd.ms-pkipko",
                 "pma" => "application/x-perfmon",
                 "pmc" => "application/x-perfmon",
                 "pml" => "application/x-perfmon",
                 "pmr" => "application/x-perfmon",
                 "pmw" => "application/x-perfmon",
                 "pnm" => "image/x-portable-anymap",
                 "png"=>"image/png",
                 "PNG"=>"image/png",
                  "pot" => "application/vnd.ms-powerpoint",
                 "ppm" => "image/x-portable-pixmap",
                 "pps" => "application/vnd.ms-powerpoint",
                 "ppt" => "application/vnd.ms-powerpoint",
                 "prf" => "application/pics-rules",
                 "ps" => "application/postscript",
                 "pub" => "application/x-mspublisher",
                 "qt" => "video/quicktime",
                 "ra" => "audio/x-pn-realaudio",
                 "ram" => "audio/x-pn-realaudio",
                 "ras" => "image/x-cmu-raster",
                 "rgb" => "image/x-rgb",
                 "rmi" => "audio/mid",
                 "roff" => "application/x-troff",
                 "rtf" => "application/rtf",
                 "rtx" => "text/richtext",
                 "scd" => "application/x-msschedule",
                 "sct" => "text/scriptlet",
                 "setpay" => "application/set-payment-initiation",
                 "setreg" => "application/set-registration-initiation",
                 "sh" => "application/x-sh",
                 "shar" => "application/x-shar",
                 "sit" => "application/x-stuffit",
                 "snd" => "audio/basic",
                 "spc" => "application/x-pkcs7-certificates",
                 "spl" => "application/futuresplash",
                 "src" => "application/x-wais-source",
                 "sst" => "application/vnd.ms-pkicertstore",
                 "stl" => "application/vnd.ms-pkistl",
                 "stm" => "text/html",
                 "svg" => "image/svg+xml",
                 "sv4cpio" => "application/x-sv4cpio",
                 "sv4crc" => "application/x-sv4crc",
                 "t" => "application/x-troff",
                 "tar" => "application/x-tar",
                 "tcl" => "application/x-tcl",
                 "tex" => "application/x-tex",
                 "texi" => "application/x-texinfo",
                 "texinfo" => "application/x-texinfo",
                 "tgz" => "application/x-compressed",
                 "tif" => "image/tiff",
                 "tiff" => "image/tiff",
                 "tr" => "application/x-troff",
                 "trm" => "application/x-msterminal",
                 "tsv" => "text/tab-separated-values",
                 "txt" => "text/plain",
                 "uls" => "text/iuls",
                 "ustar" => "application/x-ustar",
                 "vcf" => "text/x-vcard",
                 "vrml" => "x-world/x-vrml",
                 "wav" => "audio/x-wav",
                 "wcm" => "application/vnd.ms-works",
                 "wdb" => "application/vnd.ms-works",
                 "wks" => "application/vnd.ms-works",
                 "wmf" => "application/x-msmetafile",
                 "wps" => "application/vnd.ms-works",
                 "wri" => "application/x-mswrite",
                 "wrl" => "x-world/x-vrml",
                 "wrz" => "x-world/x-vrml",
                 "xaf" => "x-world/x-vrml",
                 "xbm" => "image/x-xbitmap",
                 "xla" => "application/vnd.ms-excel",
                 "xlc" => "application/vnd.ms-excel",
                 "xlm" => "application/vnd.ms-excel",
                 "xls" => "application/vnd.ms-excel",
                 "xlt" => "application/vnd.ms-excel",
                 "xlw" => "application/vnd.ms-excel",
                 "xof" => "x-world/x-vrml",
                 "xpm" => "image/x-xpixmap",
                 "xwd" => "image/x-xwindowdump",
                 "z" => "application/x-compress",
                 "zip" => "application/zip"
             );
 
             return $mime_types[$exe];
 
     }
}
