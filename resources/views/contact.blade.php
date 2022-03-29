@extends('layouts.app')
@section('content')
<Modal>
            <Modal.Header closeButton className="close-btn"> </Modal.Header>
              <Modal.Title className="main2" id="contained-modal-title-vcenter">
              <h1>Project Planner</h1>
                <p>Start a project, get a quote or learn more about how we can partner to build a successful product.</p>

               
               
              </Modal.Title>
           
            <Modal.Body className="">
            <div className=" modal-content mt-5 ">
      <form className="main3 " action="home" method="POST" >
      @csrf
    @method('POST')
          <div className="  ">
          <div class="order-titles">
                    <h4 className="div-heading">Name and Contact Details</h4>
                    <p className="div-heading">tell us about yourself</p>
                </div>
                <div class="main6">
               
                <div className="form-group ">
           
           <input type="text"
           
            className="name"
             name="name" 
             placeholder="Full Name"
             id="name"
             value="{{ $contact->name }}"
              required> 
          
</input>
         </div>
         
          <div className="form-group ">
           
            <input type="email"
          
             className="email"
              name="email" 
              placeholder="Email"
              id="email"
              value="{{ $contact->email }}"
               required/>
              
</input>
          </div>
        
      
        <div className="form-group">
          
          <input type="text"
        
           className="form-control"
            name="subject" id="org"
            className="company" 
            placeholder="Subject"
            value="{{ $contact->subject }}"
            required/>
           
</input>
        </div>
        </div>
       
         
          <textarea  
          name="detail" 
         
          className="project center"
          rows="10" 
          value="{{$item['message']}}"
          placeholder="Message"
          required>  
</textarea>
        </div>
       
        </div>
        </div>
        <div className="text-center"><Button type="submit">Send </Button></div>
      </form>
      </div>
     
  
            </Modal.Body>
           
          </Modal>
@endsection