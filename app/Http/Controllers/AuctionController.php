<?php

namespace App\Http\Controllers;

use App\Auction;
use Illuminate\Http\Request;
use App\Subscriber;
use App\GroupAssign;
use Toastr;
use App\Group;
use Datatables;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( $group)
    {
        //
        $data=Group::where('groups.id',$group)->first();
        return view('auction.index',compact('group','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($group)
    {
        //
        $data=Group::where('groups.id',$group)
            ->join('schemes', 'schemes.id', '=', 'groups.schemes_id')->first();
        $count = Auction::where('group_id',$group)->count();
        $date= date('Y-m-d', strtotime($data->first_due_date . "+".$count."months") );
        
        
        return view('auction.add',compact('group','data','count','date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($group,Request $request)
    {
        //
        $this->validate($request,   ['subscriber_id'=>'required', 
                                    'group_id'=>'required',
                                    'auction_number'=>'required',
                                    'auction_amount'=>'required',
                                    'auction_date'=>'required',
                                    'commision_amount'=>'required',
                                    'gst_amount'=>'required', 
                                    'dividend_amount'=>'required',
                                    'each_dividend_amount'=>'required',
                                    'due_amount'=>'required',

                                    ]);
        $request['created_by']=auth()->user()->id;
        Auction::create($request->all());
        Toastr::success('Added data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('group.auction.index',['group' =>$group]);

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function show($group,Auction $auction)
    {
        //
        $data=Group::where('groups.id',$group)
        ->join('schemes', 'schemes.id', '=', 'groups.schemes_id')->first();
        $customer=Subscriber::where('id',$auction->subscriber_id)->first();
        return view('auction.show',compact('auction','data','customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function edit($group,Auction $auction)
    {
        //
        $data=Group::where('groups.id',$group)
        ->join('schemes', 'schemes.id', '=', 'groups.schemes_id')->first();
    $count = Auction::where('group_id',$group)->count();
    $date= date('Y-m-d', strtotime($data->first_due_date . "+".$count."months") );
    $customer=Subscriber::where('id',$auction->subscriber_id)->first();
    
    
    return view('auction.edit',compact('customer','group','data','count','date','auction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function update($group,Request $request, Auction $auction)
    {
        //
        $this->validate($request,   ['subscriber_id'=>'required', 
                                    'group_id'=>'required',
                                    'auction_number'=>'required',
                                    'auction_amount'=>'required',
                                    'auction_date'=>'required',
                                    'commision_amount'=>'required',
                                    'gst_amount'=>'required', 
                                    'dividend_amount'=>'required',
                                    'each_dividend_amount'=>'required',
                                    'due_amount'=>'required',

                                    ]);
        $request['updated_by']=auth()->user()->id;
        $auction->update($request->all());
        Toastr::success('Updated data successfully', '', ["positionClass" => "toast-top-right"]);
        return redirect()->route('group.auction.index',['group' =>$group]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auction $auction)
    {
        //
    }
   public function getdata($group)
   {  

     $auction = Auction::where('group_id',$group)
               ->join('subscribers', 'subscribers.id', '=', 'auctions.subscriber_id')
               ->join('groups', 'groups.id', '=', 'auctions.group_id')
               ->select(['auctions.auction_amount',
                         'auctions.auction_date',
                         'auctions.commision_amount',
                         'auctions.gst_amount',
                         'auctions.dividend_amount',
                         'auctions.due_amount',
                         'auctions.auction_number',
                         'subscribers.subscriber_name',
                         'auctions.unique_id',
                         'groups.name',
                         'auctions.id',
                         
                         ]);
     return Datatables::of($auction)->make(true);


    }

    public function fetch($group,Request $request){
        $query = $request->get('query');
        $data = GroupAssign::where('group_id',$group)
         ->join('subscribers', 'subscribers.id', '=', 'group_assigns.subscriber_id')
          ->where('subscribers.subscriber_name', 'LIKE', "%{$query}%")
          ->orWhere('subscribers.phone_no', 'LIKE', "%{$query}%")
          ->orWhere('subscribers.mail_id', 'LIKE', "%{$query}%")
          ->get();
        $output = '<table class="table table-streched table-hover">';
        $output .= "<thead>
            <tr>
                <th>Name</th>
                <th>Initial</th>
                <th>Phone No</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Email</th>
                <th>Occupation</th>
            </tr>
        </thead>
        
        <tbody>";
        foreach($data as $row)
        {
         $output .= "<tr>";
         $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->subscriber_name." </a></td>";
         $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->Initial_name."</a></td>";
  
         $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->phone_no."</a> </td>";
         $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->age."</a></td>";
         $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->gender."</a></td>";
         $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->p_address."</a></td>";
         $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->mail_id."</a></td>";
         $output .= "<td><a href='JavaScript:void(0)' class='custom' data-id='".$row."'>".$row->occupation."</a></td>";
         $output .= "</tr>";
        }
        $output .= '</tbody></table>';
        return $output;

    }
    public function verificationupdate(Request $request){
        $audoc = Auction::findOrFail($request->id);

        $audoc->update($request->all());
        return  $arr = array('message' => 'updated data successfully');
    }
}
