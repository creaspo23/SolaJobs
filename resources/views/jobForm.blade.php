@include('global.header2')
@yield('title')
<title>job form</title>
@yield('body')

<body>
    <div class="container">
        <form>
            <!-- 1 -->
            <div class="mb-3">
                <label for="company" class="form-label">company name</label>
                <input type="text" class="form-control" id="name">
            </div>
            <!-- 2 -->
            <div class="mb-3">
                <label for="company Email" class="form-label">Company Email address</label>
                <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp">

            </div>
            <!-- 3 -->
            <label class="form-label">State</label>
            <select class="form-select" aria-label="Default select example">
                <option value="1">kh</option>
                <option value="2">ps</option>
                <option value="3">ks</option>
            </select>
            <!-- 4 -->
            <label class="form-label">Gender for the job</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>female</option>
                <option value="1">male</option>
                <option value="1">any</option>

            </select>
            <!-- 5 -->
            <div class="col-12">
                <label for="age" class="form-label">Range of age</label>
                <input type="number" class="form-control" id="age" placeholder="max age">
                <input type="number" class="form-control" id="age1" placeholder="min age">
            </div>
            <!-- 6 -->
            <div class="col-12">
                <label for="exp" class="form-label">Years of Experience</label>
                <input type="number" class="form-control" id="exp" placeholder="">
            </div>
            {{-- 7 --}}
            <div class="col-12">
                <label for="job title" class="form-label">job title</label>
                <input type="text" class="form-control" id="job title" placeholder="doctor , ...etc">
            </div>

            <!-- 8 -->
            <div class="mb-3">
                <label for="Textarea1" class="form-label">jobs description</label>
                <textarea class="form-control" id="Textarea1" rows="3"></textarea>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
