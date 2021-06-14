using System.IO;
using CKUT.Core.Services.Ch8._8._2._2;
using NUnit.Framework;

namespace CKUT.UnitTests.Ch8._8._2._3
{
    [TestFixture]
    public class LogAnalyzerTest
    {
        private FileInfo _fileInfo;
        private LogAnalyzerInit _logan; 

        [SetUp]
        public void SetUp()
        {
            _logan = new LogAnalyzerInit();
            _logan.Initialize();
            _fileInfo = new FileInfo("c:\\someFile.txt");
        }
        [Test]
        public void IsValid_LengthBiggerThan8_IsFalse()
        {
            bool valid = _logan.IsValid("123456789");
            Assert.IsFalse(valid);
        }
        [Test]
        public void IsValid_BadFileInfoInput_returnFalse()
        {
            bool valid = _logan.IsValid(_fileInfo.Name);
            Assert.IsFalse(valid);
        }
        [Test]
        public void IsValid_LengthSmallerThan8_IsTrue()
        {
            bool valid = _logan.IsValid("1234567");
            Assert.IsTrue(valid);
        }
    }
}