<template>
  <div>
    <card :title="$t('profile_image')">
      <el-upload
        class="avatar-uploader"
        action="/api/settings/profile/upload"
        :show-file-list="false"
        :on-success="handleAvatarSuccess"
        :before-upload="beforeAvatarUpload">
        <img v-if="imageUrl" :src="imageUrl" class="avatar">
        <i v-else class="el-icon-plus avatar-uploader-icon"></i>
      </el-upload>
    </card>

    <card :title="$t('your_info')">
      <alert-success :form="form" :message="$t('info_updated')"></alert-success>
      <el-form ref="profile-form" :model="form" label-width="120px" @submit.prevent="update" @keydown="form.onKeydown($event)">

        <el-form-item :label="$t('name')">
          <el-input v-model="form.name"></el-input>
        </el-form-item>

        <el-form-item :label="$t('email')">
          <el-input v-model="form.email"></el-input>
        </el-form-item>

        <el-form-item>
          <el-button type="primary" @click="update" :loading="form.busy">{{ $t('update') }}</el-button>
        </el-form-item>

      </el-form>
    </card>
  </div>
</template>

<script>
import Form from 'vform'
import { mapGetters } from 'vuex'

export default {
  data: () => ({
    imageUrl: '',
    form: new Form({
      name: '',
      email: ''
    })
  }),

  computed: mapGetters({
    user: 'authUser'
  }),

  created () {
    // Fill the form with user data.
    this.form.keys().forEach(key => {
      this.form[key] = this.user[key]
    })
    this.imageUrl = this.user.picture;
  },

  methods: {
    async update () {
      const { data } = await this.form.patch('/api/settings/profile')

      this.$store.dispatch('updateUser', { user: data })
    },
    handleAvatarSuccess(res, file) {
      this.imageUrl = URL.createObjectURL(file.raw);
    },
    beforeAvatarUpload(file) {
      const isJPG = file.type === 'image/jpeg';
      const isPNG = file.type === 'image/png';
      const isLt2M = file.size / 1024 / 1024 < 2;

      if (!(isJPG || isPNG)) {
        this.$message.error('Avatar picture must be JPG or PNG format!');
      }

      if (!isLt2M) {
        this.$message.error('Avatar picture size can not exceed 2MB!');
      }

      return (isJPG || isPNG) && isLt2M ;
    }
  }
}
</script>

<style>
  .avatar-uploader .el-upload {
    border: 1px dashed #d9d9d9;
    border-radius: 6px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
  }
  .avatar-uploader .el-upload:hover {
    border-color: #20a0ff;
  }
  .avatar-uploader-icon {
    font-size: 28px;
    color: #8c939d;
    width: 178px;
    height: 178px;
    line-height: 178px;
    text-align: center;
  }
  .avatar {
    width: 178px;
    height: 178px;
    display: block;
  }
</style>
