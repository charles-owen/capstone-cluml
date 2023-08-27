<!DOCTYPE HTML>
<html lang="en-US">
<head>
<link href="../cl/course.css" type="text/css" rel="stylesheet" />
</head>
<body>

<figure class="border"><img src="img/userblog.png" alt="User/Blog association" width="323" height="206"></figure>
<p>Let's take a moment to think of what this is going to mean later on in code. Clearly, each of the boxes above is going to become a C++ class. Each association is going to be represented by pointers. </p>
<p class="rightbox seconda">If the class is BlogSystem in our UML, why is it CBlogSystem in our code? We will often refer to <em>language artifacts.</em> UML is meant to be a language-independent design method. We then translate the design to a given language. In our case, that will be C++. We use that C prefix convention to make it easy to recognize classes. Java users generally don't do that. So, this is something that is specific to the language we are using and our local conventions. It does not go in the UML. It is added in the translation to code.<br>
  <br>
  The same issue applies for system becoming mSystem when it becomes a member variable.
</p>
<p>For example, the User class has one system associated with it. When you implement User, you'll have a pointer named mSystem of type CBlogSystem * as a member variable:</p>
<pre class="code">
class CUser
{
    ...

private:
    CBlogSystem *mSystem;
    ...
};</pre>
<p>The CBlogSystem class must point to multiple CUser objects. We'll use some collection to do that. In this case I might use vector to do that:</p>
<pre class="code">
class CBlogSystem
{
    ...

private:
    std::vector&lt;CUser *&gt; mUsers;
    ...
};</pre>
<p>You'll get lots of experience with this type of translation in Step 5 and 6. </p>
<p class="centerbox primary">In actual code, this will be a vector of smart pointers, but I don't want to get into the choice of what smart pointer to use right now.</p>
<p>Notice here how the idea that there are multiple users is expressed in the UML using an association and in the C++ code using a vector. You will never see vector, list, etc. in UML diagrams. If you find yourself trying to create an attribute of a class of type vector, you're doing it wrong.</p>
</body>
