# Docker — 从入门到实践
## 什么是 Docker
Docker 使用 Google 公司推出的 Go 语言 进行开发实现，基于 Linux 内核的 cgroup，
namespace，以及 AUFS 类的 Union FS 等技术，对进程进行封装隔离，属于操作系统层面
的虚拟化技术
传统虚拟机技术是虚拟出一套硬件后，在其上运行一个完整操作系统，在该系统上再运行所需
应用进程
而容器内的应用进程直接运行于宿主的内核，容器内没有自己的内核，而且也没有进行硬件虚
拟。因此容器要比传统虚拟机更为轻便
## 为什么要使用 Docker
+ 更高效的利用系统资源
+ 更快速的启动时间
+ 一致的运行环境
+ 持续交付和部署
+ 更轻松的迁移
+ 更轻松的维护和扩展
## 基本概念
+ 镜像（Image）
+ 容器（Container）
+ 仓库（Repository）
## Docker 镜像
### 分层存储
## Docker 容器
镜像（Image）和容器（Container）的关系，就像是面向对象程序设计中的类和实例一样，
镜像是静态的定义，容器是镜像运行时的实体。容器可以被创建、启动、停止、删除、暂停等。
## Docker Registry
### Docker Registry 公开服务
### 私有 Docker Registry
## 安装 Docker
## 使用 Docker 镜像




