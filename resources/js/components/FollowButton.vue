<template>
  <div>
    <button class="btn btn-primary ml-4" @click="followUser">{{follow}}</button>
  </div>
</template>

<script>
export default {
  props: ["userId", "follows"],
  data() {
    return {
      status: this.follows
    };
  },
  methods: {
    followUser() {
      axios
        .post("/follow/" + this.userId)
        .then(res => {
          // console.log(res.data);
          this.status = !this.status;
        })
        .catch(err => {
          if (err.response.status === 401) {
            window.location = "/login";
          }
        });
    }
  },
  computed: {
    follow() {
      return this.status ? "Unfollow" : "Follow";
    }
  }
};
</script>
