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
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in filteredItems" :key="index">
                        <th scope="row">{{ index + 1 }}</th>
                    <td>{{ item.name }}</td>
                    <td>{{ item.description }}</td>
                    <td>
                      <!-- Edit and Delete icons with modal for editing -->
                      <span
                        @click="openEditModal(item)"
                        class="action-icon"
                        title="Edit"
                      >
                        🖊️
                      </span>
                      <span
                        @click="confirmDelete(item)"
                        class="action-icon"
                        title="Delete"
                      >
                        🗑️
                      </span>
                      <!-- Add more icons or customize as needed -->
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
              <h5 class="modal-title" id="editModalLabel">Edit Item</h5>
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
              <input
                type="text"
                id="editName"
                v-model="editedItem.name"
                class="form-control"
              />

              <label for="editDescription" class="form-label">Description:</label>
              <textarea
                id="editDescription"
                v-model="editedItem.description"
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
              <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <!-- Form fields for adding a new category -->
              <label for="newCategoryName" class="form-label">Category Name:</label>
              <input
                type="text"
                id="newCategoryName"
                v-model="newCategory.name"
                class="form-control"
              />

              <label for="newCategoryDescription" class="form-label">Category Description:</label>
              <textarea
                id="newCategoryDescription"
                v-model="newCategory.description"
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
                @click="addNewCategory"
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
  import Sidebar from "../../layouts/AdminPanel/sidebar.vue";
  import Header from "../../layouts/AdminPanel/Header.vue";
  import Swal from "sweetalert2";

  export default {
    components: {
      Sidebar,
      Header,
    },
    data() {
      return {
        searchTerm: "",
        items: [
          // Your data goes here. For example:
          { id: 1, name: "Item 1", description: "Description 1" },
          { id: 2, name: "Item 2", description: "Description 2" },
          // Add more items as needed
        ],
        selectedItem: null, // To store the item to be deleted
        editedItem: {
          id: null,
          name: "",
          description: "",
        },
        newCategory: {
          name: "",
          description: "",
        },
      };
    },
    methods: {
      openEditModal(item) {
        // Set the edited item and open the edit modal
        this.editedItem = { ...item };
        // If you're using Bootstrap, you can trigger the modal manually
        // Note: This assumes you have Bootstrap's JavaScript enabled
        const modal = new bootstrap.Modal(document.getElementById("editModal"));
        modal.show();
      },
      confirmDelete(item) {
        // Use SweetAlert for the delete confirmation
        Swal.fire({
          title: `Are you sure you want to delete ${item.name}?`,
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel!",
          reverseButtons: true,
        }).then((result) => {
          if (result.isConfirmed) {
            this.deleteItem(item);
          }
        });
      },
      deleteItem(item) {
        // Implement your delete logic here
        const index = this.items.indexOf(item);
        if (index !== -1) {
          this.items.splice(index, 1);
          console.log(`Deleted ${item.name}`);
        }
      },
      saveChanges() {
        // Implement your save changes logic
        // For example, update the item in the items array
        const index = this.items.findIndex((item) => item.id === this.editedItem.id);
        if (index !== -1) {
          this.items[index] = { ...this.editedItem };
          console.log(`Saved changes for item ${this.editedItem.id}`);
        }
        // Close the modal
        const modal = new bootstrap.Modal(document.getElementById("editModal"));
        modal.hide();
      },
      addNewCategory() {
        // Validate if the new category has a name (you can add more validation if needed)
        if (!this.newCategory.name) {
          Swal.fire({
            title: "Error!",
            text: "Please enter a category name.",
            icon: "error",
          });
          return;
        }

        // Add the new category to the list of categories
        this.items.push({
          id: this.items.length + 1, // Assuming the id is incremental
          name: this.newCategory.name,
          description: this.newCategory.description,
        });

        // Clear the new category data
        this.newCategory = {
          name: "",
          description: "",
        };

        // Close the modal
        const modal = new bootstrap.Modal(document.getElementById("addCategoryModal"));
        modal.hide();

        // Show a success message
        Swal.fire({
          title: "Success!",
          text: "New category added successfully.",
          icon: "success",
        });
      },
    },
    computed: {
        filteredItems() {
            // Filter items based on the search term
            return this.items.filter(item =>
                item.name.toLowerCase().includes(this.searchTerm.toLowerCase())
            );
        },
    },
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
