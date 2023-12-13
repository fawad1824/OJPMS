<template>
    <div>
        <Sidebar />
        <div class="col-md-9 col-lg-10 ml-md-auto px-0 ms-md-auto">
            <Header />
            <main class="p-4 min-vh-100">
                <section class="row">
                    <!-- Search Bar -->
                    <div class="col-md-9 mb-4">
                        <input
                            type="text"
                            v-model="searchTerm"
                            class="form-control"
                            placeholder="Search..."
                        />
                    </div>
                    <div class="col-md-3">
                        <!-- Button to open the Add Category Modal -->
                        <button
                            type="button"
                            class="btn btn-sm btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#addCategoryModal"
                        >
                            Add New
                        </button>
                    </div>

                    <!-- Table -->
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    style="line-height: 4"
                                    v-for="(category, index) in categorys"
                                    :key="category.id"
                                >
                                    <td>{{ index + 1 }}</td>
                                    <!-- Show index or a unique identifier -->
                                    <td>
                                        <img
                                            style="width: 100px"
                                            :src="category.image"
                                            alt=""
                                        />
                                    </td>
                                    <!-- Show category name -->
                                    <td>{{ category.name }}</td>
                                    <!-- Show category name -->
                                    <td>
                                        <button
                                            style="background: royalblue"
                                            class="btn btn-primary btn-light btn-sm m-1"
                                        >
                                            Edit
                                        </button>
                                        <button
                                            class="btn btn-primary btn-sm m-1"
                                        >
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </main>
        </div>

        <!-- Edit Modal -->
        <div
            class="modal fade"
            id="editModal"
            tabindex="-1"
            aria-labelledby="editModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">
                            Edit Item
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <!-- Place your form fields for editing here -->
                        <label for="editName" class="form-label">Name:</label>
                        <input type="text" id="editName" class="form-control" />

                        <label for="editDescription" class="form-label"
                            >Description:</label
                        >
                        <textarea
                            id="editDescription"
                            class="form-control"
                        ></textarea>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                        <button
                            type="button"
                            class="btn btn-primary"
                            @click="saveChanges"
                        >
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Category Modal -->
        <div
            class="modal fade"
            id="addCategoryModal"
            tabindex="-1"
            aria-labelledby="addCategoryModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCategoryModalLabel">
                            Add New Category
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form fields for adding a new category -->
                        <label for="newCategoryName" class="form-label"
                            >Category Name:</label
                        >
                        <input
                            v-model="categoryName"
                            type="text"
                            id="newCategoryName"
                            class="form-control"
                        />
                        <label for="newCategoryImage" class="form-label"
                            >Image:</label
                        >
                        <input
                            @change="handleFileChange"
                            type="file"
                            id="newCategoryImage"
                            class="form-control"
                        />
                        <img
                            v-if="imageUrl"
                            :src="imageUrl"
                            alt="Preview Image"
                            style="
                                max-width: 100%;
                                height: auto;
                                margin-top: 10px;
                            "
                        />
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal"
                        >
                            Close
                        </button>
                        <button
                            @click="saveCategory"
                            type="button"
                            class="btn btn-primary"
                        >
                            Add Category
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios"; // Ensure you have this import statement

import Sidebar from "../../layouts/AdminPanel/Sidebar.vue";
import Header from "../../layouts/AdminPanel/Header.vue";
import Swal from "sweetalert2";

export default {
    components: {
        Sidebar,
        Header,
    },
    data() {
        return {
            categorys: [],
            categoryName: "",
            imageUrl: null,
        };
    },
    mounted() {
        this.fetchCompanies(); // Invoke the fetchCompanies method when the component is mounted
    },
    methods: {
        async fetchCompanies() {
            try {
                const response = await axios.get("/api/get-category", {
                    headers: {
                        Authorization: `Bearer ${localStorage.getItem(
                            "Token"
                        )}`,
                    },
                });
                this.categorys = response.data; // Assign the response data to categorys

                // Update your component's data or perform necessary operations with the response data
            } catch (error) {
                if (error.response.status == 401) {
                    localStorage.removeItem("Token");
                    localStorage.removeItem("Users");
                    this.$router.push({ name: "AuthLogin" }); // Replace 'MainAdminLayout' with the desired route name
                }
                console.error("Error fetching Companies:", error);
            }
        },
        handleFileChange(event) {
            const selectedFile = event.target.files[0];

            if (selectedFile) {
                const reader = new FileReader();

                reader.onload = () => {
                    this.imageUrl = reader.result;
                };

                reader.readAsDataURL(selectedFile);
            } else {
                this.imageUrl = null;
            }
        },
        async saveCategory() {
            try {
                const selectedFile =
                    document.getElementById("newCategoryImage").files[0];

                if (!selectedFile) {
                    console.error("No file selected");
                    return;
                }

                const formData = new FormData();
                formData.append("name", this.categoryName);
                formData.append("image", selectedFile);

                const response = await axios.post(
                    "/api/add-category",
                    formData,
                    {
                        headers: {
                            "Content-Type": "multipart/form-data", // Use 'multipart/form-data' for file upload
                            Authorization: `Bearer ${localStorage.getItem(
                                "Token"
                            )}`,
                        },
                    }
                );

                console.log("Category saved:", response.data);

                const modal = new bootstrap.Modal(
                    document.getElementById("addCategoryModal")
                );
                modal.hide();
                this.fetchCompanies(); // Invoke the fetchCompanies method when the component is mounted
            } catch (error) {
                if (error.response.status == 401) {
                    localStorage.removeItem("Token");
                    localStorage.removeItem("Users");
                    this.$router.push({ name: "AuthLogin" }); // Replace 'MainAdminLayout' with the desired route name
                }
                // Handle error
            }
        },
    },
    computed: {},
};
</script>

<style scoped>
.action-icon {
    cursor: pointer;
    margin-right: 10px;
}
button.btn.btn-sm.btn-primary {
    padding: 19px;
}
</style>
