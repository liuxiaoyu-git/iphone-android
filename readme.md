环境：OCP4.3+ServiceMesh+Knative环境

部署运行说明：

1：将android和iphone分支PHP应用按照Knative的方式部署

2：获得android版和iphone版应用的访问地址，然后更新到master中的index.php。

3：部署master的PHP应用

4：用android和iphone分别访问master的PHP应用对应的route地址，可以看到和手机相关的不同的结果。
