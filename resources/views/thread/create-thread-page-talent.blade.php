@extends('navigation.talent-template')
<link rel="stylesheet" href="{{asset('/css/thread/create-thread-page-talent.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('content')

<section class="create-thread-page-talent">
    <div class="thread-page-talent-header">
        <h1>Create your thread</h1>
    </div>
    <div class="create-thread-page-talent-wrapper">
        <div class="profile-talent">
            <div class="profile-talent-wrapper">
                <div class="profile-talent-image-wrapper">
                    <div class="profile-talent-image">
                        <img src="{{asset('images/thread/jason.jpg')}}" alt="">
                    </div>
                </div>
                <div class="profile-talent-role-wrapper">
                    <div class="profile-talent-role">
                        <h2>Talent</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="talent-thread-content">
            <div class="talent-thread-name">
                <h2>Udin Petot</h2>
            </div>
            <form action="#">
                <div class="talent-thread-description">
                    <h3>Description</h3>
                    <textarea name="learner-thread-description"></textarea>
                </div>

                <div class="talent-thread-package">
                    <h3>Package</h3>
                    <div class="packages-wrapper">
                        <div class="myPackage">
                            <div class="add-package-wrapper" id="addPackage" onclick="showModal()">
                                <h1>Add Your Package</h1>
                                <i class="fa-sharp fa-solid fa-circle-plus"></i>
                            </div>
                            <div class="thread-package-modal" id="myModal" onclick="hideModal()">
                                <div class="thread-package-modal-wrapper">
                                    <span class="close" onclick="closeModal()">&times;</span>

                                    <div class="package-form">
                                        <form action="#" id="package-form">
                                            <div class="package-title">
                                                <h2>Package title</h2>
                                                <input type="text" name="package-title">
                                            </div>
                                            <div class="package-description">
                                                <h2>Package Description</h2>
                                                <textarea name="package-description"></textarea>
                                            </div>
                                            <div class="package-list">
                                                <h2>Package List</h2>
                                                <ul>
                                                    <li><input type="text" name="list-1"
                                                            placeholder="Type your list...">
                                                    </li>
                                                    <li><input type="text" name="list-2"
                                                            placeholder="Type your list...">
                                                    </li>
                                                    <li><input type="text" name="list-3"
                                                            placeholder="Type your list...">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="package-price">
                                                <h2>Package Price</h2>
                                                <div class="package-price-wrapper">
                                                    <span>Rp</span>
                                                    <input type="number" name="package-price">
                                                </div>
                                            </div>

                                            <div class="package-post-btn">
                                                <button type="submit">Post Package</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="myPackage">
                            <div class="add-package-wrapper" id="addPackage" onclick="showModal()">
                                <h1>Add Your Package</h1>
                                <i class="fa-sharp fa-solid fa-circle-plus"></i>
                            </div>
                            <div class="thread-package-modal" id="myModal" onclick="hideModal()">
                                <div class="thread-package-modal-wrapper">
                                    <span class="close" onclick="closeModal()">&times;</span>

                                    <div class="package-form">
                                        <form action="#" id="package-form">
                                            <div class="package-title">
                                                <h2>Package title</h2>
                                                <input type="text" name="package-title">
                                            </div>
                                            <div class="package-description">
                                                <h2>Package Description</h2>
                                                <textarea name="package-description"></textarea>
                                            </div>
                                            <div class="package-list">
                                                <h2>Package List</h2>
                                                <ul>
                                                    <li><input type="text" name="list-1"
                                                            placeholder="Type your list...">
                                                    </li>
                                                    <li><input type="text" name="list-2"
                                                            placeholder="Type your list...">
                                                    </li>
                                                    <li><input type="text" name="list-3"
                                                            placeholder="Type your list...">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="package-price">
                                                <h2>Package Price</h2>
                                                <div class="package-price-wrapper">
                                                    <span>Rp</span>
                                                    <input type="number" name="package-price">
                                                </div>
                                            </div>

                                            <div class="package-post-btn">
                                                <button type="submit">Post Package</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="myPackage">
                            <div class="add-package-wrapper" id="addPackage" onclick="showModal()">
                                <h1>Add Your Package</h1>
                                <i class="fa-sharp fa-solid fa-circle-plus"></i>
                            </div>
                            <div class="thread-package-modal" id="myModal" onclick="hideModal()">
                                <div class="thread-package-modal-wrapper">
                                    <span class="close" onclick="closeModal()">&times;</span>

                                    <div class="package-form">
                                        <form action="#" id="package-form">
                                            <div class="package-title">
                                                <h2>Package title</h2>
                                                <input type="text" name="package-title">
                                            </div>
                                            <div class="package-description">
                                                <h2>Package Description</h2>
                                                <textarea name="package-description"></textarea>
                                            </div>
                                            <div class="package-list">
                                                <h2>Package List</h2>
                                                <ul>
                                                    <li><input type="text" name="list-1"
                                                            placeholder="Type your list...">
                                                    </li>
                                                    <li><input type="text" name="list-2"
                                                            placeholder="Type your list...">
                                                    </li>
                                                    <li><input type="text" name="list-3"
                                                            placeholder="Type your list...">
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="package-price">
                                                <h2>Package Price</h2>
                                                <div class="package-price-wrapper">
                                                    <span>Rp</span>
                                                    <input type="number" name="package-price">
                                                </div>
                                            </div>

                                            <div class="package-post-btn">
                                                <button type="submit">Post Package</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="post-thread-btn">
                    <button type="submit">Post Thread</button>
                </div>
            </form>
        </div>

    </div>
</section>

<script>
    function showModal() {
    document.getElementById("myModal").style.display = "block";
}
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

</script>




@endsection
