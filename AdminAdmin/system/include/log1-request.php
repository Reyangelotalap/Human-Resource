
<div class="card text-center my-3">

<h3 class="border-top border-primary border-3 pt-3">Logistic 1 Department</h3>

<hr class="mt-2">

<div class="card-body">

    <div class="row row-cols-1 row-cols-md-2 g-2">

        <div class="col-lg-4 mb-3 mb-sm-0">
            <div class="card h-100">
                <h5 class="border-top border-primary border-3 pt-3">Propose Project</h5>
                <hr class="mt-2">
                <div class="card-body">
                    <p class="card-text">Propose a project for the development of our dear company.</p>   
                </div>
                <div class="card-footer text-muted">
                    <button type="button" class="itt btn btn-primary" 
                    data-bs-toggle="modal" 
                    data-bs-target="#propose-project"
                    data-bs-placement="bottom" 
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="Propose Project">
                        Propose
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3 mb-sm-0">
            <div class="card h-100">
                <h5 class="border-top border-primary border-3 pt-3">Request Maintenance</h5>
                <hr class="mt-2">
                <div class="card-body">
                    <p class="card-text">Request if your Department needs mantenance for equipment, facilities or items.</p>   
                </div>
                <div class="card-footer text-muted">
                    <button type="button" class="itt btn btn-primary" 
                    data-bs-toggle="modal" 
                    data-bs-target="#request-maintenance"
                    data-bs-placement="bottom" 
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="Request Maintenance">
                        Request
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3 mb-sm-0">
            <div class="card h-100">
                <h5 class="border-top border-primary border-3 pt-3">Request Items</h5>
                <hr class="mt-2">
                <div class="card-body">
                    <p class="card-text">Request here if your Department needs equipment or item.</p>
                </div>
                <div class="card-footer text-muted">
                    <button type="button" class="itt btn btn-primary" 
                    data-bs-toggle="modal" 
                    data-bs-target="#request-items"
                    data-bs-placement="bottom" 
                    data-bs-custom-class="custom-tooltip"
                    data-bs-title="Request Items">
                        Request
                    </button>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

</section>

<!-- #########################################################################################################
                                        Propose Project Modal
######################################################################################################### -->

<div class="modal fade" id="propose-project" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">

<div class="modal-header">
<h1 class="modal-title fs-5">Propose Project</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
  
<div class="modal-body">
<form action="propose-add.php" method="post">

    <div class="mb-3">
        <label class="form-label">Department</label>
        <select class="form-select" name="department" required>
        <option selected>Select Department</option>
        <option value="Human Resource-1">Human Resource-1</option>
        <option value="Human Resource-2">Human Resource-2</option>
        <option value="Logistic-1">Logistic-1</option>
        <option value="Logistic-2">Logistic-2</option>
        <option value="Core-1">Core-1</option>
        <option value="Core-2">Core-2</option>
        <option value="Administrative">Administrative</option>
        <option value="Financial">Financial</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Who Owns the Project</label>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
            <label for="floatingInput">Full Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
            <label for="floatingInput">Email Address</label>
        </div>
    </div>

    <div class="mb-3">
      <label class="form-label">Date today</label>
      <input type="date" class="form-control" name="date"  required >
    </div>

    <div class="mb-3">
      <label class="form-label">Project Title</label>
      <input type="text" class="form-control" name="title" placeholder="Enter Title" required >
    </div>

    <div class="mb-3">
        <label class="form-label">Proposal Letter</label>
        <textarea class="form-control" name="letter1" rows="4" placeholder="[This first sentence should include your name and your company. Mention any previous meetings regarding the topic or any previous company history. Give a brief overview of what your proposal is about.]" required></textarea>
        
        <textarea class="form-control" name="letter2" rows="3" placeholder="[In the second paragraph, state the purpose of your proposal. Include specific information to make it clear.]" required></textarea>

        <textarea class="form-control" name="letter3" rows="5" placeholder="[In the first sentence of your closing paragraph, express gratitude and thank the recipient for their time reviewing your proposal. Include your contact information and let them know you are happy to answer any questions.]" required></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Vision and Goal</label>
        <textarea class="form-control" name="vision" rows="8" placeholder="Be clear and state the vision of the project and its goals and how they align with the organization’s business plan. You must be specific and the goals must be measurable. Think action-oriented, realistic and based on time. This is not a place for broad strokes, but rather concise and exact results you expect to achieve. Add clarity by having the goals listed out." required></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deliverables</label>
        <textarea class="form-control" name="deliverables" rows="4" placeholder="Whatever the project scope is, there are going to be deliverables throughout its life cycle. These are crucial to the project’s success and need to be detailed." required></textarea>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Timeframe</label>
        <textarea class="form-control" name="timeframe" rows="4" placeholder="A project needs resources to get it done, and this is the section you will detail those you need to complete your project. List the type of resource, the quantity and then add notes as needed to clarify." required></textarea>
    </div>
  
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Resources</label>
        <textarea class="form-control" name="resources" rows="4" placeholder="A project needs resources to get it done, and this is the section you will detail those you need to complete your project. List the type of resource, the quantity and then add notes as needed to clarify." required></textarea>
    </div>
  
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Project Budget</label>
        <textarea class="form-control" name="budget" rows="5" placeholder="Resources cost money, and that financial obligation is estimated here. This is an important part of the budget for the sponsor, as they are going to pay for it and you have to show them a return on that investment." required></textarea>
    </div>     
   

</div>

<div class="modal-footer">
  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary" name="submit-add">Submit</button>
</div>

</form>

</div>
</div>
</div>

<!-- ######################################################################################################### -->

<!-- Request Maintenance Modal -->

<div class="modal fade" id="request-maintenance" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">

<div class="modal-header">
<h1 class="modal-title fs-5">Request Maintenance</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
  
<div class="modal-body">
<form action="create-user.php" method="post">

    <div class="mb-3">
        <label class="form-label">Department</label>
        <select class="form-select" name="user_type" required>
        <option selected>Select Department</option>
        <option value="hr-1">Human Resource-1</option>
        <option value="hr-2">Human Resource-2</option>
        <option value="log-1">Logistic-1</option>
        <option value="log-2">Logistic-2</option>
        <option value="core-2">Core-1</option>
        <option value="core-2">Core-2</option>
        <option value="admin">Administrative</option>
        <option value="finance">Financial</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Requested By:</label>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="Full Name" required>
            <label for="floatingInput">Full Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="Email Address" required>
            <label for="floatingInput">Email Address</label>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Items that need maintenance</label>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="Item Name" required>
            <label for="floatingInput">Item Name</label>
        </div>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Maintenance Request</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" placeholder="I am writing to request repairs to the (equipments, items, facilities — be specific!) due to (reason for repair).

(Describe the issue in detail here. State the reason — even if obvious — the repair or replacement is needed.)

I would greatly appreciate it if you could arrange for (these repairs/this replacement) as soon as possible. Please contact me at (email) if you have any questions or need to make arrangements and let me know when the work will be completed.

Thanks in advance for your speedy response." required></textarea>
    </div>

</div>

<div class="modal-footer">
  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>

</form>

</div>
</div>
</div>

<!-- ######################################################################################################### -->

<!-- Request items Modal -->

<div class="modal fade" id="request-items" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable">
<div class="modal-content">

<div class="modal-header">
<h1 class="modal-title fs-5">Request Items</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
  
<div class="modal-body">
<form action="create-user.php" method="post">

    <div class="mb-3">
        <label class="form-label">Department</label>
        <select class="form-select" name="user_type" required>
        <option selected>Select Department</option>
        <option value="hr-1">Human Resource-1</option>
        <option value="hr-2">Human Resource-2</option>
        <option value="log-1">Logistic-1</option>
        <option value="log-2">Logistic-2</option>
        <option value="core-2">Core-1</option>
        <option value="core-2">Core-2</option>
        <option value="admin">Administrative</option>
        <option value="finance">Financial</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Requested By:</label>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="Full Name" required>
            <label for="floatingInput">Full Name</label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="Email Address" required>
            <label for="floatingInput">Email Address</label>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Items Request</label>
        <textarea class="form-control" rows="15" placeholder="I want to inform you that we need some extra equipment to complete the project timely. I request you to provide the following equipment on a priority:

Description Quantity

Item name - 1 3

item name - 2 5

item name - 3 23

Please provide the above-specified equipment before the (date) to keep the work going without any interruption. Look for your earliest response." required></textarea>
    </div>

</div>

<div class="modal-footer">
  <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>

</form>

</div>
</div>
</div>

<!-- ######################################################################################################### -->

