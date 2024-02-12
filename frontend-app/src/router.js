import { createRouter, createWebHistory } from 'vue-router';
import AddTask from '../views/AddTask.vue';
import TaskList from '../views/TaskList.vue';

const routes = [
  {
    path: '/',
    name: 'TaskList',
    component: TaskList
  },
  {
    path: '/add',
    name: 'AddTask',
    component: AddTask
  }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
