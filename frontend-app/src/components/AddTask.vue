<template>
  <div class="add-task">
    <h1>Add Task</h1>
    <form @submit.prevent="addTask">
      <label for="title">Title:</label>
      <input type="text" id="title" v-model="task.title" required>
      
      <label for="description">Description:</label>
      <textarea id="description" v-model="task.description" required></textarea>
      
      <button type="submit">Add Task</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      task: {
        title: '',
        description: '',
      },
    };
  },
  methods: {
    addTask() {
      // Send HTTP request to backend to add new task
      // Reset task data after successful addition
    },
  },
};
</script>

<style scoped>
/* Add component styles here */
.add-task {
  /* Add styles for add task form container */
}
</style>
