<!-- Bootstrap core JavaScript-->
<script src="{{ url('backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ url('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ url('backend/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ url('backend/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ url('backend/vendor/datatables/jquery.dataTables.min.js') }} "></script>
<script src="{{ url('backend/vendor/datatables/dataTables.bootstrap4.min.js') }} "></script>


<!-- Page level custom scripts -->
<script src="{{ url('backend/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ url('backend/js/demo/chart-pie-demo.js') }}"></script>
<script src="{{ url('backend/js/demo/datatables-demo.js') }}"></script>

{{-- Page Trix Editor --}}
<script src="{{ url('backend/js/trix.js') }}"></script>

{{-- My Custom Script --}}
<script>
    // get filename
    document.querySelector('.my-custom-file').addEventListener('change', function (e) {
        var name = document.getElementById("image").files[0].name;
        var nextSibling = e.target.nextElementSibling
        nextSibling.innerText = name
    })
    
    // sluggable
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("change", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g,"-");
        slug.value = preslug.toLowerCase();
    });
    
    // matiin fitur trix file
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    });


    // preview Image
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result
        }
    }
</script>