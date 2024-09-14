<?php
class about_contents{
        public function about_content(){
        ?>
        <div class="row">
        <div class="content">
            <h1>About Content</h1>
                    <p1>In PHP, inheritance is implemented by using the 
                        extends keyword in the class declaration.
                        When a class extends another, it inherits all the 
                        non-private properties and methods of the parent class. 
                        This allows the child class to leverage and extend
                        the functionality defined in the parent class. For example, 
                        if you have a class HashBase with basic properties like 
                        ‘algorithm’ and ‘hashr,’ and methods like ‘makeHash()’ 
                        and ‘getAlgorithm(),’ you could extend this class to 
                        create more specific types of hashing, like HashWithMd5 or 
                        HashWithSha256, which will automatically have access to 
                        the HashBase class's properties and methods. 
                        The child class can also define additional properties or
                        methods, as well as override inherited methods to provide
                        specialized behavior.</p1>
            </div>
        <?php
    }
    public function side_bar(){
        ?>
        <div class="side_bar">
        <h1>Side bar</h1>
            <p1>This mechanism enables code reusability and establishes a
                 relationship between classes where the subclass is a specialized 
                version of the superclass. The subclass can add its own unique 
                features or override the behavior of the superclass, which 
                promotes a hierarchical organization of classes. Inheritance 
                embodies the "is a" relationship, meaning a subclass is a type 
                of the superclass. This leads to a more intuitive arrangement
                of code and can greatly reduce redundancy, as shared functionalities
                need to be written only once in the superclass.</p1>
    </div>
</div>
    <?php    
    }
}