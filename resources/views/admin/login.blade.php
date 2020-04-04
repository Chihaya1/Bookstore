@includes('admin.partials.headscript.php')
@includes('admin.partials.header.php')
    <div class="col-md-10">
        <h2>
            Login Here 
        </h2>
        <form action="" method="post">
            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control"  placeholder="Enter password" name="password">
            </div>
            <div class="form-group">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                <label>Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    

