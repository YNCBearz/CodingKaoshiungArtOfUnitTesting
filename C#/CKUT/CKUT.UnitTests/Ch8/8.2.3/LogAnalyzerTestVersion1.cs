using System.IO;
using CKUT.Core.Services.Ch8._8._2._2;
using NUnit.Framework;

namespace CKUT.UnitTests.Ch8._8._2._3
{
    public class LogAnalyzerTestVersion1
    {
        private FileInfo _fileInfo;
        private LogAnalyzerInit _logan;

        [Test]
        public void IsValid_LengthBiggerThan8_IsFalse()
        {
            SetLogan();
            var valid = _logan.IsValid("123456789");
            Assert.IsFalse(valid);
        }

        [Test]
        public void IsValid_BadFileInfoInput_returnFalse()
        {
            SetLogan();
            GivenFileInfo();
            var valid = _logan.IsValid(_fileInfo.Name);
            Assert.IsFalse(valid);
        }

        [Test]
        public void IsValid_LengthSmallerThan8_IsTrue()
        {
            var valid = _logan.IsValid("1234567");
            Assert.IsTrue(valid);
        }

        private void GivenFileInfo()
        {
            _fileInfo = new FileInfo("c:\\someFile.txt");
        }

        private void SetLogan()
        {
            _logan = new LogAnalyzerInit();
            _logan.Initialize();
        }
    }
}