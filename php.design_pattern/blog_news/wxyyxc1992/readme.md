# 设计模式
原文链接：[PHP 实战之设计模式：PHP 中的设计模式](https://segmentfault.com/a/1190000003817321#articleHeader9)
+ 创建模式:用于创建对象从而将某个对象从实现中解耦合
+ 架构模式:用于在不同的对象之间构造大的对象结构
+ 行为模式:用户在不同的对象之间管理算法、关系以及职责
## 创建模式 Creational Patterns
### 单例模式 Singleton
    用于允许在运行时为某个特定的类创建一个可访问的实例
### 注册台模式 Registry
    注册台模式并不是很常见，它也不是一个典型的创建模式，只是为了利用静态方法更方便的
    存取数据
### 工厂模式 Factory
    工厂模式提供了通用的方法有助于我们去获取对象，而不需要关心其具体的内在的实现
### 抽象工厂模式 AbstractFactory
    有些情况下我们需要根据不同的选择逻辑提供不同的构造工厂，而对于多个工厂而言需要一
    个统一的抽象工厂
### 对象池 Object pool
    对象池可以用于构造并且存放一系列的对象并在需要时获取调用
### 延迟初始化 Lazy Initialization
    对于某个变量的延迟初始化也是常常被用到的，对于一个类而言往往并不知道它的哪个功能
    会被用到，而部分功能往往是仅仅被需要使用一次
### 原型模式 Prototype
    有些时候，部分对象需要被初始化多次。而特别是在如果初始化需要耗费大量时间与资源的
    时候进行预初始化并且存储下这些对象
### 构造者 Builder
    构造者模式主要在于创建一些复杂的对象
## 架构模式 Structural Patterns
### 装饰器模式 Decorator
    装饰器模式允许我们根据运行时不同的情景动态地为某个对象调用前后添加不同的行为动作
### 适配器模式 Adapter
    允许使用不同的接口重构某个类，可以允许使用不同的调用方式进行调用
## 行为模式 Benavioral Patterns
### 策略模式 Strategy
    为了让客户类能够更好地使用某些算法而不需要知道其具体的实现
### 观察者模式 Observer
    某个对象可以被设置为是可观察的，只要通过某种方式允许其他对象注册为观察者。每当被
    观察的对象改变时，会发送信息给观察者
### 责任链模式 Chain of responsibility
    这种模式有另一种称呼：控制链模式。它主要由一系列对于某些命令的处理器构成，每个查
    询会在处理器构成的责任链中传递，在每个交汇点由处理器判断是否需要对它们进行响应与
    处理。每次的处理程序会在有处理器处理这些请求时暂停
    